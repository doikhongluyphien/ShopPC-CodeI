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
                $data['Bộ vi xử lý - CPU'] = $this->mbaogia->getInfoProduct($this->input->post('cpu'));
                $sum+=$data['Bộ vi xử lý - CPU']['spgia'];
                
            }
            
            if ($this->input->post('mainboard') && is_numeric($this->input->post('mainboard')))
            {
                $data['Bo mạch chủ - Mainboard'] = $this->mbaogia->getInfoProduct($this->input->post('mainboard'));
                $sum+=$data['Bo mạch chủ - Mainboard']['spgia'];
                
            }
            
            if ($this->input->post('ram') && is_numeric($this->input->post('ram')))
            {
                $data['Bộ nhớ trong - RAM'] = $this->mbaogia->getInfoProduct($this->input->post('ram'));
                $sum+=$data['Bộ nhớ trong - RAM']['spgia'];
                
            }
            
            if ($this->input->post('hdd') && is_numeric($this->input->post('hdd')))
            {
                $data['Ổ đĩa cứng - HDD'] = $this->mbaogia->getInfoProduct($this->input->post('hdd'));
                $sum+=$data['Ổ đĩa cứng - HDD']['spgia'];
                
            }
            
            if ($this->input->post('vga') && is_numeric($this->input->post('vga')))
            {
                $data['Card màn hình - VGA Card'] = $this->mbaogia->getInfoProduct($this->input->post('vga'));
                $sum+=$data['Card màn hình - VGA Card']['spgia'];
                
            }
            
            if ($this->input->post('monitor') && is_numeric($this->input->post('monitor')))
            {
                $data['Màn hình - Monitor'] = $this->mbaogia->getInfoProduct($this->input->post('monitor'));
                $sum+=$data['Màn hình - Monitor']['spgia'];
                
            }
            
            if ($this->input->post('case') && is_numeric($this->input->post('case')))
            {
                $data['Vỏ máy tính - Case'] = $this->mbaogia->getInfoProduct($this->input->post('case'));
                $sum+=$data['Vỏ máy tính - Case']['spgia'];
                
            }
            
            if ($this->input->post('power') && is_numeric($this->input->post('power')))
            {
                $data['Nguồn - Power Supply'] = $this->mbaogia->getInfoProduct($this->input->post('power'));
                $sum+=$data['Nguồn - Power Supply']['spgia'];
                
            }
            
            
            if ($this->input->post('mouse') && is_numeric($this->input->post('mouse')))
            {
                $data['Chuột - Mouse'] = $this->mbaogia->getInfoProduct($this->input->post('mouse'));
                $sum+=$data['Chuột - Mouse']['spgia'];
                
            }
            
            if ($this->input->post('keyboard') && is_numeric($this->input->post('keyboard')))
            {
                $data['Bàn phím - Keyboard'] = $this->mbaogia->getInfoProduct($this->input->post('keyboard'));
                $sum+=$data['Bàn phím - Keyboard']['spgia'];
                
            }
            
            if ($this->input->post('odd') && is_numeric($this->input->post('odd')))
            {
                $data['Ổ đĩa quang - CD/DVD'] = $this->mbaogia->getInfoProduct($this->input->post('odd'));
                $sum+=$data['Ổ đĩa quang - CD/DVD']['spgia'];
                
            }
            
            
            if ($this->input->post('speaker') && is_numeric($this->input->post('speaker')))
            {
                $data['Loa máy tính - Speaker'] = $this->mbaogia->getInfoProduct($this->input->post('speaker'));
                $sum+=$data['Loa máy tính - Speaker']['spgia'];
                
            }
            
            $data['sum'] = $sum;
            
            return $data;

        }
        
        
    }
    
    
    
    
    
    
}