<?php
    class Mmain extends CI_Model{
        function __construct(){
            parent::__construct();
            
        }
        
        public function updateVisit(){
           $this->db->where('id','1');
           $this->db->set('visit','visit + 1',FALSE);
           $this->db->update('counter');
        }
        
        public function getVisit(){
           $this->db->select('visit');
           $this->db->where('id','1');
           $query = $this->db->get('counter');
           if ($query->num_rows() > 0)
                $row = $query->row_array();
           return $row['visit'];
           
        }
        
        public function getFlash(){
            $query = $this->db->get('flash');
            if ($query->num_rows() > 0)
                return $query->result_array();
        }
    }
?>