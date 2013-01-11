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
        $this->load->model(array('mbaogia','mgiohang'));
        
        
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
            }
            else
            {
                $data['list_product'] = $this->mbaogia->getInfoProductInParent($this->input->post('did'));
            }
            
            $data['mota'] = $this->input->post('mota');
            $this->load->view('baogia',$data);

        }
        elseif ($this->input->post())
        {
            $data = array();
            $sum = 0;
            
            if ($this->input->post('cpu') && is_numeric($this->input->post('cpu')))
            {
                $data['choncauhinh']['Bộ vi xử lý - CPU'] = $this->mbaogia->getInfoProduct($this->input->post('cpu'));
                $sum+=$data['choncauhinh']['Bộ vi xử lý - CPU']['spgia'];
                
            }
            
            if ($this->input->post('mainboard') && is_numeric($this->input->post('mainboard')))
            {
                $data['choncauhinh']['Bo mạch chủ - Mainboard'] = $this->mbaogia->getInfoProduct($this->input->post('mainboard'));
                $sum+=$data['choncauhinh']['Bo mạch chủ - Mainboard']['spgia'];
                
            }
            
            if ($this->input->post('ram') && is_numeric($this->input->post('ram')))
            {
                $data['choncauhinh']['Bộ nhớ trong - RAM'] = $this->mbaogia->getInfoProduct($this->input->post('ram'));
                $sum+=$data['choncauhinh']['Bộ nhớ trong - RAM']['spgia'];
                
            }
            
            if ($this->input->post('hdd') && is_numeric($this->input->post('hdd')))
            {
                $data['choncauhinh']['Ổ đĩa cứng - HDD'] = $this->mbaogia->getInfoProduct($this->input->post('hdd'));
                $sum+=$data['choncauhinh']['Ổ đĩa cứng - HDD']['spgia'];
                
            }
            
            if ($this->input->post('vga') && is_numeric($this->input->post('vga')))
            {
                $data['choncauhinh']['Card màn hình - VGA Card'] = $this->mbaogia->getInfoProduct($this->input->post('vga'));
                $sum+=$data['choncauhinh']['Card màn hình - VGA Card']['spgia'];
                
            }
            
            if ($this->input->post('monitor') && is_numeric($this->input->post('monitor')))
            {
                $data['choncauhinh']['Màn hình - Monitor'] = $this->mbaogia->getInfoProduct($this->input->post('monitor'));
                $sum+=$data['choncauhinh']['Màn hình - Monitor']['spgia'];
                
            }
            
            if ($this->input->post('case') && is_numeric($this->input->post('case')))
            {
                $data['choncauhinh']['Vỏ máy tính - Case'] = $this->mbaogia->getInfoProduct($this->input->post('case'));
                $sum+=$data['choncauhinh']['Vỏ máy tính - Case']['spgia'];
                
            }
            
            if ($this->input->post('power') && is_numeric($this->input->post('power')))
            {
                $data['choncauhinh']['Nguồn - Power Supply'] = $this->mbaogia->getInfoProduct($this->input->post('power'));
                $sum+=$data['choncauhinh']['Nguồn - Power Supply']['spgia'];
                
            }
            
            
            if ($this->input->post('mouse') && is_numeric($this->input->post('mouse')))
            {
                $data['choncauhinh']['Chuột - Mouse'] = $this->mbaogia->getInfoProduct($this->input->post('mouse'));
                $sum+=$data['choncauhinh']['Chuột - Mouse']['spgia'];
                
            }
            
            if ($this->input->post('keyboard') && is_numeric($this->input->post('keyboard')))
            {
                $data['choncauhinh']['Bàn phím - Keyboard'] = $this->mbaogia->getInfoProduct($this->input->post('keyboard'));
                $sum+=$data['choncauhinh']['Bàn phím - Keyboard']['spgia'];
                
            }
            
            if ($this->input->post('odd') && is_numeric($this->input->post('odd')))
            {
                $data['choncauhinh']['Ổ đĩa quang - CD/DVD'] = $this->mbaogia->getInfoProduct($this->input->post('odd'));
                $sum+=$data['choncauhinh']['Ổ đĩa quang - CD/DVD']['spgia'];
                
            }
            
            
            if ($this->input->post('speaker') && is_numeric($this->input->post('speaker')))
            {
                $data['choncauhinh']['Loa máy tính - Speaker'] = $this->mbaogia->getInfoProduct($this->input->post('speaker'));
                $sum+=$data['choncauhinh']['Loa máy tính - Speaker']['spgia'];
                
            }
            
            $data['sum'] = $sum;
            $this->load->view('baogia',$data);
        }
        elseif ($this->uri->segment(2) == 'cart')
        {
            
            $this->load->library('cart');
            $data['product_cart'] = $this->mgiohang->getInfoProductCart();
            $this->load->view('baogia',$data);
        }
        
    }
    
    
    
    
    
    
}