<?php
 class Mbaogia extends CI_Model{
    
    function __construct(){
        parent::__construct();
    }
    
    public function getInfoProduct($spid){
        $this->db->select("spdes,spbh,spgia,sptitle");
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
    
    public function getInfoProductInParent($did)
    {
        $data = array();
        $this->db->where('did',$did);
        $this->db->or_where('dparent',$did);
        $query = $this->db->get('danhsach');
        $result = $query->result_array();
       
       if(count($result))
       {
            foreach ($result as $row)
            {
                $title = $row['dtitle'];
                $this->db->flush_cache();
                $query = $this->db->get_where("sanpham",array('spkho' => 'Còn hàng', 'sploai' => $row['did']));
                if ($query->num_rows())
                    $data[$title] = $query->result_array();
 
            }
       }
       return $data;
       
        
    }
 }