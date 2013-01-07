<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha extends CI_Controller {
   
    function __construct(){
        parent:: __construct();
       $this->load->library('captcha_');
    }
    
    public function index(){
       
        $this->captcha_->creatImage();
        
    }
    
    
    
    
}