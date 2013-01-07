<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download_ajax extends CI_Controller {
    
        function __construct(){
            parent::__construct();
        }
        
        public function index()
        {

        }
        
        
        public function getChild()
        {
            $this->load->model('mdownload');
            $data = $this->mdownload->getChild(6);
            if ($this->input->post('did') && is_numeric($this->input->post('did')))
            {
                $data = $this->mdownload->getChild($this->input->post('did'));
                if (count($data))
                {
                    foreach ($data as $row)
                        echo "<option value=\" {$row['did']} \">-> {$row['dtitle']}</option>";
                }
                else
                    echo "<option>-> Không có danh mục con nào !</option>";
                    
                
            }       
            
            
        }
}