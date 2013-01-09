<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Choncauhinh_ajax extends CI_Controller {
    function __construct(){
        parent::__construct();
    } 
    
    
    public function getPrice(){
        
        $this->load->model('mchoncauhinh');
        $data = array();
        $sum = 0;
        if ($this->input->post('cpu') && is_numeric($this->input->post('cpu')))
        {
            $cpu = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('cpu'));
            $data['cpu'] = number_format($cpu,0,",",".");
            $sum +=$cpu;
            
        }
        else
            $data['cpu'] = 0;
        
        if ($this->input->post('mainboard') && is_numeric($this->input->post('mainboard')))
        {
            $mainboard = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('mainboard'));
            $data['mainboard'] = number_format($mainboard,0,",",".");
            $sum +=$mainboard;
            
        }
        else
            $data['mainboard'] = 0;
        
        if ($this->input->post('ram') && is_numeric($this->input->post('ram')))
        {
            $ram = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('ram'));
            $data['ram'] = number_format($ram,0,",",".");
            $sum +=$ram;
            
        }
        else
            $data['ram'] = 0;
            
            
        if ($this->input->post('hdd') && is_numeric($this->input->post('hdd')))
        {
            $hdd = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('hdd'));
            $data['hdd'] = number_format($hdd,0,",",".");
            $sum +=$hdd;
            
        }
        else
            $data['hdd'] = 0;
            
        if ($this->input->post('vga') && is_numeric($this->input->post('vga')))
        {
            $vga = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('vga'));
            $data['vga'] = number_format($vga,0,",",".");
            $sum +=$vga;
            
        }
        else
            $data['vga'] = 0;
            
        if ($this->input->post('monitor') && is_numeric($this->input->post('monitor')))
        {
            $monitor = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('monitor'));
            $data['monitor'] = number_format($monitor,0,",",".");
            $sum +=$monitor;
            
        }
        else
            $data['monitor'] = 0;
        
         if ($this->input->post('case') && is_numeric($this->input->post('case')))
        {
            $case = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('case'));
            $data['case'] = number_format($case,0,",",".");
            $sum +=$case;
            
        }
        else
            $data['case'] = 0;

        if ($this->input->post('power') && is_numeric($this->input->post('power')))
        {
            $power = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('power'));
            $data['power'] = number_format($power,0,",",".");
            $sum +=$power;
            
        }
        else
            $data['power'] = 0;
            
        if ($this->input->post('mouse') && is_numeric($this->input->post('mouse')))
        {
            $mouse = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('mouse'));
            $data['mouse'] = number_format($mouse,0,",",".");
            $sum +=$mouse;
            
        }
        else
            $data['mouse'] = 0;
        
        if ($this->input->post('keyboard') && is_numeric($this->input->post('keyboard')))
        {
            $keyboard = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('keyboard'));
            $data['keyboard'] = number_format($keyboard,0,",",".");
            $sum +=$keyboard;
            
        }
        else
            $data['keyboard'] = 0;
        
        if ($this->input->post('odd') && is_numeric($this->input->post('odd')))
        {
            $odd = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('odd'));
            $data['odd'] = number_format($odd,0,",",".");
            $sum +=$odd;
            
        }
        else
            $data['odd'] = 0;
        
        if ($this->input->post('speaker') && is_numeric($this->input->post('speaker')))
        {
            $speaker = $this->mchoncauhinh->getInfoPriceProduct($this->input->post('speaker'));
            $data['speaker'] = number_format($speaker,0,",",".");
            $sum +=$speaker;
            
        }
        else
            $data['speaker'] = 0;
            
        $data['sum'] = number_format($sum,0,",",".");
        
        echo json_encode($data);
        
        
    }   
}