<?php

    class MKhuyenmai extends CI_Model{
        
        function __construct(){
            
            parent::__construct();
        }
        
        
        public function getKhuyenMai(){
            
            $query = $this->db->get("khuyenmai");
            return $query->row_array();
        }
    }