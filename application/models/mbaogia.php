<?php
 class Mbaogia extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    public function getInfoProduct($spid){
        
        $query = $this->db->get_where("sanpham",array('spid' => $spid));
        return $query->row_array();
    }
 }