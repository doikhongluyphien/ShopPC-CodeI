<?php
    class Msearch extends CI_Model{
        
        function __construct(){
            
            parent::__construct();
        }
        
        
        public function getSearch($key, $page, $limit)
        {
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('sanpham')." WHERE sptitle LIKE '%{$key}%' OR spdes LIKE '%{$key}%' ORDER BY spgia ASC");
            $total_sp = $sql->num_rows();
            $num_pages = ceil($total_sp / $limit);
            
            if ($num_pages < $page )
                $page = $num_pages;
            
            if ($page < 1)
                $page = 1;    
                
            $start =  ($page - 1) * $limit;
            $result = $this->db->query($this->db->last_query() . " LIMIT {$start},{$limit}");
            
            $data['sum'] = $total_sp;
            $data['num_pages'] = $num_pages;
            $data['result'] = $result->result_array();
            
            return $data;
        }
        
    }

?>