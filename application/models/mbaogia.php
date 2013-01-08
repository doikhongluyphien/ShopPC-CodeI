<?php
 class Mbaogia extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    public function getInfoProduct($spid){
        
        $query = $this->db->get_where("sanpham",array('spid' => $spid));
        return $query->row_array();
    }
    
    
    public function getInfoProductInChild($arr_did){
        $data = array();
        foreach ($arr_did as $did)
        { 
            $this->db->select("dtitle");
            $query = $this->db->get_where("danhsach",array('did' => $did));
            $result = $query->row_array();
            
            if (count($result) )
            {
                $title = $result['dtitle'];
                $this->db->flush_cache();
                $query = $this->db->get_where("sanpham",array('spkho' => 'Còn hàng', 'sploai' => $did));
                $data[$title] = $query->result_array();
            }
        }
        
        return $data;
        
    }
 }