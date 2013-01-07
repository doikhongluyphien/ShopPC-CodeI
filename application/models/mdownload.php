<?php

    class Mdownload extends CI_Model{
        
        function __construct(){
            
            parent::__construct();
        }
        
        public function getBaoGia()
        {
            $this->db->order_by("bgid","asc");
            $query = $this->db->get_where("baogia",array("active" => '1'));
            return $query->result_array();
           
        }
        
        
        public function getParent(){
            $this->db->order_by("dorder asc, did asc");
            $query = $this->db->get_where("danhsach",array('dparent' => '0','active' => '1' ));
            return $query->result_array();
        }
        
        
        public function getChild($did=6)
        {
            $this->db->order_by('dorder asc, did asc');
            $query = $this->db->get_where("danhsach", array('dparent' => $did , 'active' => '1'));
            return $query->result_array();
        }
        
        
    }