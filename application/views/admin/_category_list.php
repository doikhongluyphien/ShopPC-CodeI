<div class="title_margin"></div>
<div class="bloc">
    <div class="title">
        DANH SÁCH CÁC DANH MỤC SẢN PHẨM
    </div>
    <div class="content">
        <form action="../proccess_main/action_change" method="post">
        <table class="tb_list">
            <thead>
                <tr>
                    <th class="th_check"><input type="checkbox" class="checkall" /></th>
                    <th class="th_stt">STT</th>
                    <th class="th_vt">Vị trí</th>
                    <th class="th_dm">Danh mục sản phẩm </th>
                    <th class="th_kh">Kích hoạt</th>
                    <th class="th_tool">Công cụ</th>
                </tr>
            </thead>
            <tbody>
                <br />
                <?php
                    $mangcheck = $noidung;
                    foreach ($mangcheck as $r3 => $value3) {
                        foreach ($value3 as $r4 => $value4) {
                            if (isset($mangcheck[$r3][$r4][0]) && is_array($mangcheck[$r3][$r4][0])) {
                              $checkmang[] = array($r3);
                             }
                       }
                    }
                    $ghetmang="";
                    if(isset($checkmang))
                    foreach ($checkmang as $ch => $ma) {
                        foreach ($ma as $m1 => $m2) {
                            $ghetmang[] = $m2;
                        }
                    }
                    if(isset($ghetmang))
                    $checkmang= $ghetmang;
                ?>
               
                
                 <?php
                 $i=1;
                  
                 $active;   
                   while (list($r,$value)= each($noidung)) {
                       
                        
                       while(list($r1,$value1) = each($value)){
                           
                          
                              echo "<tr>";
                              
                              // print_r($value2);
                            // echo "<br/>";
                               
                            
                          while (list($r2,$value2)= each($value1)) {
                              
                             
                              
                             if(is_array($value2)){
                                
                                 if ( $value2["active"] == "1" )
                                    {
                                        $active = "Hiển thị";
                                    }
                                    else
                                    {
                                        $active = "Không";
                                    }
                                  echo '<td><input type="checkbox" name="chon[]" value="'.$i.'"  class="choncheck"/>
                                  <input type="hidden" name="hid[]" value="'.$value2["did"].'" /></td>';
                                echo '<td>'.$i.'</td>';
                                 echo '<td></td>';
                                 echo '<td class="td_dm" style="padding-left:5%;font-weight:bold;">
                                <input type="text" name="txt_id[]" id="txt_id" maxlength="2" style="text-align:center;" value="'.$value2["dorder"].'" /> &nbsp; 
                                 <a href="'.base_url("admin/proccess_main/category_list_regular") ."/".$value2["did"].'" style="text-decoration:none;">&raquo;&nbsp;
                                 '.$value2["dtitle"].'</a></td>';
                                 echo '<td>'.$active.'</td>';
                                 echo '<td class="actions"><a href="'.base_url("admin/proccess_main/category_list_regular") ."/".$value2["did"].'" title="Sửa nội dung này"><img src="'.base_url('style/admin/img/icons/edit.png').'" alt="" /></a>
                                 <a href="'.base_url("admin/proccess_main/category_list") ."/".$value2["did"].'" title="Xóa nội dung này">
                                 
                                <img src="'.base_url("style/admin/img/icons/delete.png").'" alt="" /></a></td>';
                                 break;
                                 
                             }else{
                                 if ( $value1["active"] == "1" )
                                    {
                                        $active = "Hiển thị";
                                    }
                                    else
                                    {
                                        $active = "Không";
                                    }
                              if ( in_array($value1["did"],$checkmang) ) {
                                   echo '<td></td>';
                                  
                              }else{
                                 echo '<td>
                               <input type="checkbox" name="chon[]" value="'.$i.'" class="choncheck" /></td>';
                              }
                                    
                              echo '<input type="hidden" name="hid[]" value="'.$value1["did"].'" />';      
                              echo '<td>'.$i.'</td>';
                                 echo '<td><input type="text" name="txt_id[]" id="txt_id" maxlength="2" style="text-align:center;" value="'.$value1["dorder"].'"/></td>';
                                 echo '<td class="td_dm" style="font-weight:bold;">
                                 <a href="'.base_url("admin/proccess_main/category_list_regular")."/".$value1["did"].'" style="text-decoration:none;">'.$value1["dtitle"].'</a></td>';
                                 echo '<td>'.$active.'</td>';
                                 
                                
                               
                               if (in_array($value1["did"],$checkmang)) {
                                    echo '<td class="actions"><a href="'.base_url("admin/proccess_main/category_list_regular") ."/".$value1["did"].'" title="Sửa nội dung này"><img src="'.base_url('style/admin/img/icons/edit.png').'" alt="" /></a></td>';
                                  
                              }else{
                                   echo '<td class="actions"><a href="'.base_url("admin/proccess_main/category_list_regular") ."/".$value1["did"].'" title="Sửa nội dung này"><img src="'.base_url('style/admin/img/icons/edit.png').'" alt="" /></a> <a href="'.base_url("admin/proccess_main/category_list") ."/".$value1["did"].'" title="Xóa nội dung này"> <img src="'.base_url("style/admin/img/icons/delete.png").'" alt="" /></a></td>';
                              }  
                               
                                 break;
                             }
                              
                          } //end while3
                           echo "</tr>";
                          $i++;
                       } // end while2
                       
                           
                   }//end while 1
                     ?>

                          
               
                            </tbody>
        </table>
        
                          
        </div>
  <div  class="bt_sm" style="float:left;padding-top:5px;margin-left: 50px">
             <input type="submit" value="Lưu vị trí đã chọn" name="sm_save" /> 
             &nbsp;
             <input type="submit" value="Xóa vị trí đã chọn" name="sm_del"/>
    </div>

        
        </form>
    </div>
</div>

