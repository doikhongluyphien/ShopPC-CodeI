<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baogia extends CI_Controller {
   
    function __construct(){
        parent:: __construct();

    }
    
    public function index(){
        
        
        
        
    }
    
    public function printProduct()
    {
        
        $this->load->config('config');
        $this->load->model('mbaogia');
        
        if ($this->uri->segment(2) && is_numeric($this->uri->segment(2)))
        {
            $data['info'] = $this->mbaogia->getInfoProduct($this->uri->segment(2));
            $this->load->view('baogia',$data);
        }
        elseif ($this->input->post('inbaogia'))
        {
            if ($this->input->post('bgdid'))
            {
                $data['list_product'] = $this->mbaogia->getInfoProductInChild($this->input->post('bgdid'));
                $data['mota'] = $this->input->post('mota');
                $this->load->view('baogia',$data);
            }
            else
            {
                echo "Khong ton tai";
            }
        }
        
        
    }
    
    
    
    
    
    
}