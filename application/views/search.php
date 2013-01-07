<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>
<div class="list">
    <!-- Begin search -->
    <div class="bgtitle"><b>Kết quả tìm kiếm</b></div>
    <div align="center" style="padding:10px 0">
        <font color="#3281cd">Tìm thấy <b><?php echo $product['sum'] ?></b> sản phẩm với từ khóa <b><?php echo $this->uri->segment(2) ?></b></font><br />
    </div>
        <div class="brow">
        <?php
        if (isset($product['result']) && count($product['result']) > 0)
            {
                $check = count($product['result']);
                $j=1;
                foreach ($product['result'] as $row)
                {
                    if ( $row['spkm'] != "")
                        $spkm = "Có khuyến mãi";
                    else
                        $spkm = "";
                        
                    if ( $row['spgia'] != 0)
                        $spgia = number_format($row['spgia'],0,",",".");
                    else
                        $spgia = "Call";    
                    if ( !empty( $row['sppic'] ))
                        $sppic = base_url().$this->config->item('product')."icon_".$row['spdate'].".".$row['sppic'];
                    else
                        $sppic = base_url()."images/noimg.jpg";
      ?>  
         <div class="bcol fl">
            <div class="ppic fl"><a href="<?php echo link_detail($row['spid'],$row['sptitle'],$row['sploai'],$seg_nsx)?>" title="<?php echo $row['sptitle'] ?>" ><img src="<?php echo $sppic ?>" alt="<?php echo $row['sptitle'] ?>" /></a></div>
            <div class="ptitle fr"><a href="<?php echo link_detail($row['spid'],$row['sptitle'],$row['sploai'],$seg_nsx)?>"><?php echo $row['sptitle'] ?></a></div>
            <div class="pkmai fr"><?php echo $spkm ?></div>
            <div class="pgia fr"><?php echo $spgia ?></div>
            <div class="pdes"><?php echo print_product($row['sploai'],$row) ?></div>
            <div class="pmore">
                <div class="pdetail fl"><a href="<?php echo link_detail($row['spid'],$row['sptitle'],$row['sploai'],$seg_nsx)?>">Chi tiết</a></div>
                <div class="fl"><a href="#" title="In báo giá"><img src="<?php echo base_url();?>style/images/blank.gif" width="23" height="18" align="absmiddle" alt="In báo giá" /></a></div>
                <div class="pdetail fl"><a href="#" onclick="alert('Bạn đã thêm sản phẩm vào giỏ hàng');">Mua hàng</a></div>
            </div>
        </div>
         <?php
                if ($j % 3 == 0)
                    $temp = "</div><div class=\"brow\">";
                else
                    $temp =  "<div class=\"bline fl\"></div>";
                if ($j == $check)
                    $temp = "";
                
                
                echo $temp;
                $j++;
                }
            }
            
        ?>
    </div>
    <div style="text-align:center;">
        Bạn đang xem trang
        <select style="border:1px #c6c6c6 solid; width:50px" size="1" onchange="window.location='<?php echo base_url('search')."/".$this->uri->segment(2) ?>/page/'+this.options[this.selectedIndex].value;">
        <?php
            $j=1;
            for (;$j<=$product['num_pages']; ++$j)
            {
                if ($j == $this->uri->segment(4))
                    echo "<option value=\"".$j."\" selected style=\"font-weight:bold\">{$j}</option>";
                else
                    echo "<option value=\"".$j."\">{$j}</option>";
            }
        ?>
        </select>
    </div>
</div>
<div class="bblock">
    <div class="bbotr">
        <div class="bbotl">
        </div>
    </div>    
</div>
