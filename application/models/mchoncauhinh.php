<?php

    class Mchoncauhinh extends CI_Model{
        
        function __construct(){
            parent::__construct();
            
        }
        
        private function getInfoAllProduct($sploai){
            
            $this->db->select("spid,spgia,spbh,sptitle");
            $this->db->order_by("spgia","asc");
            $query = $this->db->get_where("sanpham",array('sploai' => $sploai ));
            
            return $query->result_array();
        
            
        }
        
        public function getInfoPriceProduct($sp)
        {
            $this->db->select("spgia");
            $query = $this->db->get_where("sanpham",array('spid' => $sp));
            $data  = $query->row_array();
            return $data['spgia'];
            
        }
        
        
        public function getList(){
            //Get product CPU
            $data['cpu'] = $this->getInfoAllProduct(11);
            
            //Get mainboard
            $data['mainboard'] = $this->getInfoAllProduct(12);
            
            //Get RAM
            $data['ram'] = $this->getInfoAllProduct(13);
            
            //Get HDD
            $data['hdd'] = $this->getInfoAllProduct(14);
            
            //Get VGA
            $data['vga'] = $this->getInfoAllProduct(15);
            
            //Get monitor
            $data['monitor'] = $this->getInfoAllProduct(16);
            
            //Get Case
            $data['case'] = $this->getInfoAllProduct(20);
            
            //Get Power
            $data['power'] = $this->getInfoAllProduct(21);
            
            //Get mouse
            $data['mouse'] = $this->getInfoAllProduct(22);
            
            //Get keyboard
            $data['keyboard'] = $this->getInfoAllProduct(17);
            
            //Get ODD
            $data['odd'] = $this->getInfoAllProduct(19);
            
            //Get Speaker
            $data['speaker'] = $this->getInfoAllProduct(44);

            return $data;
            
        }
    }