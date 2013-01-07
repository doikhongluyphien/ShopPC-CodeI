<?php
    class Mlienhe extends CI_Model{
        
        function __construct(){
            
        }
        
        public function send()
        {
            //Xóa mã xác nh?n trong array
            $data = $this->input->post();
            unset($data['code']);
            
            // Thêm tru?ng datasubmit vào trong array
            $data["datesubmit"] = date( "Y-m-d H:i:s" );
            return $this->db->insert("lienhe",$data);
        }
    }
?>