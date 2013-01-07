<?php
    class Mleft extends CI_Model{
        
        
        function __construct(){
            parent::__construct();
            
        }
        public $wcat,$wnid;
        public function getMenu($cat = 6,$nsx = 0){
            
            if ($cat != 0)
            {
                $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE did='{$cat}'");
                $row = $sql->row_array();
                if (count($row) > 0 && $row['dparent'] != 0){
                    $sql_ = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE did='{$row['dparent']}'");
                    $row_ = $sql->row_array();
                    $this->wcat = "did=".$cat;
                    if ($nsx == 0)
                    {
                        $this->wnid="did='$cat') ORDER BY ntitle ASC LIMIT 20";
                    }
                    else
                    {
                        $this->wnid= $this->db->dbprefix('chitiet_nsx').".nid={$nsx} AND {$this->wcat}) ORDER BY ntitle ASC";
                    }
                }
                else 
                {
                    $this->wcat = "dparent='{$cat}' AND active='1' ORDER BY dorder ASC, did ASC";
                    if ($nsx == 0){
                        $this->wnid = "did='$cat'";
                        $sqln = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE dparent='{$cat}'");
                        foreach ($sqln->result_array() as $rows)
                        {
                            $this->wnid .= " OR did='{$rows['did']}'";
                        }
                        $this->wnid .=") GROUP BY ntitle ORDER BY ntitle ASC LIMIT 20";
                    }
                    else
                    {
                       $this->wnid = $this->db->dbprefix('chitiet_nsx').".nid='{$nsx}' AND did={$cat}) ORDER BY ntitle ASC"; 
                    }
                }
                
            }
            
            else
            {
                $this->wcat = "dparent='6' and active='1' ORDER BY dorder ASC, did ASC"; 
                if ($nsx == 0)
                {
                    $this->wnid = "did='6'";
                    $sqln = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE dparent='6'");
                    foreach ($sqln->result_array() as $rows)
                    {
                        $this->wnid .= " OR did='{$rows['did']}'";
                    }
                    $this->wnid .=") GROUP BY ntitle ORDER BY ntitle ASC LIMIT 20";
                    
                }
                else
                {
                    $this->wnid = "nid='{$nsx}'";
                }
            }
            
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE {$this->wcat}");
            return $sql->result_array();
            
        }
        
        public function getNsx(){
            
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('nsx')." INNER JOIN ".$this->db->dbprefix('chitiet_nsx'). 
                                    " ON ".$this->db->dbprefix('chitiet_nsx').".nid=".$this->db->dbprefix('nsx').".nid WHERE ({$this->wnid}");
            if ($sql->num_rows() > 0)
                return $sql->result_array();
        }
        
        public function getPrice($cat = 6){
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE did={$cat}");
            if ($sql->num_rows() > 0)
                return $sql->row_array();
            
        }
        
        public function getTitleCat($cat)
        {
            $sql = $this->db->query("SELECT dtitle FROM ".$this->db->dbprefix('danhsach')." WHERE did='{$cat}'");
            if ( $sql->num_rows() > 0)
                $row = $sql->row_array();
            return $row['dtitle'];
            
        }
        
        public function getTitleNsx($nid=0){
             $sql = $this->db->query("SELECT ntitle FROM ".$this->db->dbprefix('nsx')." WHERE nid='{$nid}'");
            if ( $sql->num_rows() > 0){
                $row = $sql->row_array();
                return $row['ntitle'];
            }
        }
    }
?>