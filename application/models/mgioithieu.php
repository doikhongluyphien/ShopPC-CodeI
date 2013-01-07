<?php

    class Mgioithieu extends CI_Model{
        
        function __construct(){
            parent::__construct();
        }
        
        
        public function getGioiThieu(){
            $query = $this->db->get("gioithieu");
            return $query->row_array();
        }
    }
?>