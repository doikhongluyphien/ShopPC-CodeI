<div class="title_margin"></div>
<div class="bloc">
    <div class="title">
        <?php 
        $red="";
            while (list($key,$value) = each($category_regular)) {
               
                $red = $value["gloai"];
                break;
                
            }
         ?>
    </div>
    <div class="content">
        <form action="../proccess_main/detail_update/<?php echo $red; ?>" method="POST" name="frm_donhang">
            
        <table class="tb_list">
            <thead>
                <tr>
                    <th class="th_dm">Thông tin sản phẩm</th>
                    <th class="th_kh">Bảo hành </th>
                    <th class="th_hsx">Giá(VNĐ)</th>
                    <th class="th_hsx">Số lượng</th>
                    <th class="th_tool">Thành tiền(VNĐ)</th>
                </tr>
            </thead>
            <tbody class="tb_sp">
                <?php  
                $soluong =0;
                $thanhtien =0;
                $id="";
                $c0="";
                $c1="";
                $c2="";
                $c3="";
                
                    while(list($key,$value) = each($category_regular)) {
                        echo '<tr>';
                        echo '<td>'.$value["sptitle"].'</td>';
                        echo '<td>'.$value["spbh"].'</td>';
                        echo '<td>'.number_format($value["gia"],0,',','.').'</td>';
                        echo '<td>'.$value["soluong"].'</td>';
                        echo '<td>'.number_format(($value["gia"]*$value["soluong"]),0,',','.').'</td>';
                        echo '</tr>';
                        $id = $value["hid"];
                        $soluong+= $value["soluong"];
                        $thanhtien+= ($value["gia"]*$value["soluong"]);
                        if ( $value['xuly'] == "Chờ xử lý" )
                                {
                                    $c0 = "selected";
                                    $c1 = $c2 = $c3 = "";
                                }
                                else if ( $value['xuly'] == "Đã thanh toán" )
                                {
                                    $c1 = "selected";
                                    $c0 = $c2 = $c3 = "";
                                }
                                else if ( $value['xuly'] == "Đang chuyển hàng" )
                                {
                                    $c2 = "selected";
                                    $c1 = $c0 = $c3 = "";
                                }
                                else
                                {
                                    $c3 = "selected";
                                    $c1 = $c0 = $c2 = "";
                                }
                                        
                    }
                ?>
                               
                    
                <tr>
                    <td colspan="3">Tổng tiền </td>
                    <td><?php echo $soluong; ?></td>
                    <td><?php echo number_format($thanhtien,0,',','.') ?></td>
                </tr>                      
                            
                            </tbody>
        </table>
        
         <div  class="bt_sm" style="float:left;padding-top:5px;margin-left: 50px;">
             <?php 
             
                        echo '   <select name="action" id="tableaction" >
                                        <option value="Chờ xử lý" '.$c0.'>Chờ xử lý </option>
                                        <option value="Đã thanh toán" '.$c1.'>Đã thanh toán</option>
                                        <option value="Đang chuyển hàng" '.$c2.'>Đang chuyển hàng</option>
                                        <option value="Đã xử lý" '.$c3.'>Đã xử lý</option>
                                   </select>';
                                   
                        echo '<input type="hidden" value="'.$id.'" name="hid"/>';
                 ?>
             &nbsp;&nbsp;
             <input type="submit" name="sm_save" value="Cập nhật trạng thái" /> 
             &nbsp;&nbsp;
             <input type="submit" name="sm_order" value="Xóa đơn hành" /> 
         </div>
        
        
        
        
        </form>
        
    </div>
</div>

