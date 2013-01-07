<?php

    class Mchinhsach extends CI_Model{
        
        function __construct(){
            
            parent::__construct();
        }
        
        
        public function getChinhSach(){
            
            $query = $this->db->get("chinhsach");
            return $query->row_array();
        }
        
    }
?>