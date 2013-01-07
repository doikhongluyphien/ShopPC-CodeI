<?php
    class Mduongdi extends CI_Model{
        
        function __construct(){
            parent::__construct();
        }
        
        public function getDuongDi(){
            
            $query = $this->db->get("sododuongdi");
            return $query->row_array();
        }
    }
?>