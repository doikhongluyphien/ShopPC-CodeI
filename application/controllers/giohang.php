<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Giohang extends CI_Controller{
        
        function __construct(){
            
            parent::__construct();
            $this->load->library('cart');
            $this->load->model('mbaogia');
        }
        
        public function showLeftCart()
        {
            $this->load->view('left_giohang');
        }
        
        public function emptyCart()
        {
            
            $this->cart->destroy();
        }
        
        
        public function addCart()
        {    
           
            if ($this->input->post('spid') && is_numeric($this->input->post('spid')))
            {
                $spid = intval($this->input->post('spid'));
                $info = $this->mbaogia->getInfoProduct($spid);
                $data = array(
                    'id' => $spid,
                    'qty' => 1,
                    'price' => $info['spgia'],
                    'name' => url_title($info['sptitle'])
                );
                
                $this->cart->insert($data);
                echo $this->cart->total_items();
 
            }
        }
        
        public function updateCart()
        {
            if ($this->input->post('ajax'))
            {
                $rowid = $this->input->post('rowid');
                $data = array(
                    'rowid' => $rowid,
                    'qty' => 0
                );
                $this->cart->update($data);
                echo number_format($this->cart->total(),0,",",".");
            }
            else
            {
                $total = $this->cart->total_items();
                $item = $this->input->post('rowid');
                $qty = $this->input->post('qty');
                
                for ($i=0 ; $i<$total ; $i++)
                {
                    if (is_numeric($qty[$i]))
                        $valid_qty = $qty[$i];
                    else
                        break;
                    $data = array(
                        'rowid' => $item[$i],
                        'qty' => intval($valid_qty)
                    );
                    
                    $this->cart->update($data);
                }
                redirect('gio-hang');
            }
        }
    }