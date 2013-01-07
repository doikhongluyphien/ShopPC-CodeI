<?php
    class Msanpham extends CI_Model{
        
        public $where = " spid!=0";
        
        function __construct(){
            parent::__construct();
            
        }
        
        
        public function getTitle($cat = 6, $nsx = 0){
            if ( $cat != 0 )
            {
                $sql = $this->db->query("SELECT dtitle, dparent FROM ".$this->db->dbprefix('danhsach')." WHERE did='{$cat}'");
                $row = $sql->row_array();
                if ( count($row) > 0 && $row['dparent'] == 0 )
                {
                    $title_arr['text'] = array($row['dtitle']);
                    if ($nsx != 0)
                        $title_arr['link'] = array(link_cat($cat).link_nsx($nsx));
                    else
                        $title_arr['link'] = array(link_cat($cat));
                }   
                else
                {
                     $sqlsub = $this->db->query( "SELECT dtitle FROM ".$this->db->dbprefix('danhsach')." WHERE did='{$row['dparent']}'" );
                     $rowsub = $sqlsub->row_array();
                     $title_arr['text'] = array($rowsub['dtitle'],$row['dtitle']); 
                     if ($nsx !=0 )
                        $title_arr['link'] = array(link_cat($row['dparent'].link_nsx($nsx)),link_cat($cat).link_nsx($nsx));
                     else
                        $title_arr['link'] = array(link_cat($row['dparent']),link_cat($cat));
                     
                     $this->where .= " AND sploai='{$cat}'";
                }
                return $title_arr;
                
            } 
        }
        
        
        
        
        public function getProduct($cat = 6, $nsx = 0, $priceup = 0, $pricedown = 0, $page = 1){
            $limit = 12;
            
            if ( $nsx != 0 )
                $this->where .= " AND spnsx='{$nsx}'";
            if ( $priceup != 0 && $pricedown !=0 )
            {
                if ($priceup == 1)
                    $this->where .= " AND spgia<='{$pricedown}'";
                else if ( $priceup == $pricedown )
                {
                    $priceup = $priceup - 1;
                    $this->where .= " AND spgia > '{$priceup}'";
                }
                else
                    $this->where .= " AND (spgia > '{$priceup}' AND spgia <= '{$pricedown}')";
            }
            if ( $cat != 0 )
            {
                $sql = $this->db->query("SELECT dtitle, dparent FROM ".$this->db->dbprefix('danhsach')." WHERE did='{$cat}'");
                $row = $sql->row_array();
                if ( count($row) > 0 && $row['dparent'] == 0 )
                {
                    $sql_ = $this->db->query("SELECT * FROM ".$this->db->dbprefix('danhsach')." WHERE dparent='{$cat}'");
                    if ( $sql_->num_rows() > 0 )
                    {
                        $this->where .= " AND (sploai='{$cat}'";
                        foreach ($sql_->result_array() as $row_)
                        {
                            $this->where .= " OR sploai='".$row_['did']."'"; 
                        }
                        
                        $this->where .= ") "; 
                    }
                    else
                    {
                        $this->where .= " AND sploai='{$cat}'";
                    }
                }
                else
                {  
                     $this->where .= " AND sploai='{$cat}'";
                }
                
            } 
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('sanpham'). " WHERE {$this->where} ORDER BY spgia ASC");
            $total_sp = $sql->num_rows();
            $num_pages = ceil( $total_sp / $limit );
            
            if ( $num_pages < $page )
                $page = $num_pages;
            if ( $page < 1 )
                $page = 1;
                
            //Get numpages
            $data['num_pages'] = $num_pages; 
            $start = ($page -1 ) * $limit;
            
            //Get product
            $sql = $this->db->query($this->db->last_query()." LIMIT {$start},{$limit} ");
            if ($sql->num_rows() > 0)
                $data['products'] =  $sql->result_array();
                
             //Get most view product   
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('sanpham')." WHERE {$this->where} ORDER BY spview DESC LIMIT 0,9");
            if ( $sql->num_rows() > 0)
                $data['mostview'] = $sql->result_array();
                
            return $data;
        }
        
        public function getDetailProduct($spid = 0){
            $sql = $this->db->query("SELECT * FROM ".$this->db->dbprefix('sanpham'). " WHERE spid={$spid}");
            $row = $sql->row_array();
            if ( count($row) )
            {
                // Update sum of viewer 
                $cat = $row['sploai'];
                $this->db->where('spid',$spid);
                $this->db->set('spview','spview+1',FALSE);
                $this->db->update('sanpham');
                
                //End update
                
                $data['detail'] = $row;
                
               $this->db->select('ntitle');
               $this->db->where('nid',$row['spnsx']);
               $query_ = $this->db->get('nsx');
               if ($query_->num_rows() > 0 )
               {
                    $row_ = $query_->row_array();
                    $data['nsx_title'] = $row_['ntitle'];
               }
               else
                    $data['nsx_title'] = "Đang cập nhật";
                    
               // Get the 3 product like the main product
               
               $sql_ = $this->db->query("SELECT * FROM ".$this->db->dbprefix('sanpham'). " WHERE spid!='{$spid}' AND sploai='{$cat}' ORDER BY spid DESC LIMIT 0,3");
               if ($sql_->num_rows() > 0)
                    $data['sameProduct'] = $sql_->result_array();
                    
               //End get 3 product
               
               return $data; 
            }
        }
        
        
       
    }