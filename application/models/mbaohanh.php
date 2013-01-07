<?php
    class Mbaohanh extends CI_Model{
        
        function __construct(){
            
            parent::__construct();
        }
        
        public function getBaoHanh(){
            $query = $this->db->get("baohanh");
            
            return $query->row_array();
            
        }
    }
?>