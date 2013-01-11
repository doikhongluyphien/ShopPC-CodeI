<?php

    class Mgiohang extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
        public function getInfoProductCart()
        {
            $data = array();    
            foreach ($this->cart->contents() as $row)
            {
                $this->db->select('sptitle,spdes,spbh');
                $query = $this->db->get_where("sanpham",array('spid' => $row['id']));
                $data[$row['rowid']] = $query->row_array();
                $data[$row['rowid']]['qty'] = $row['qty'];
                $data[$row['rowid']]['price'] = $row['price'];
                $this->db->flush_cache();
            }
            return $data;
            
        }
    }