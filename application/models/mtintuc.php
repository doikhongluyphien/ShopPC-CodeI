<?php
    class Mtintuc extends CI_Model{
        
        
        function __construct(){
            parent::__construct();
        }
        
        function getNews(){
            $this->db->limit(20);
            $this->db->order_by("nid","desc");
            $query = $this->db->get("tintuc");
            
            return $query->result_array();
        }
        
        
        function detailNews($nid)
        {
            $query = $this->db->get_where("tintuc",array('nid' => $nid));
            $data['main'] = $query->row_array();
            
            $_query = $this->db->get_where("tintuc",array('nid !=' => $nid),15);
            $data['relative'] = $_query->result_array();
            
            
            return $data;
        }
        
        
    }
?>