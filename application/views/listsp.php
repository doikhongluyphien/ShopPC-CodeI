
<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>
<!-- Sản phẩm xem nhiều -->
<div class="list">
    <div class="bgtitle"><b>Sản phẩm xem nhiều</b></div>
     <div class="brow">
        <ul id="mostview" class="jcarousel-skin-tango">
     <?php
            
            if (isset($product['mostview']) && count($product['mostview']) > 0)
            {
                foreach ($product['mostview'] as $row)
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
      <li>              
        <div class="bcol fl">
            <div class="ppic fl"><a href="<?php echo link_detail($row['spid'],$row['sptitle'],$row['sploai'],$seg_nsx)?>" title="<?php echo $row['sptitle'] ?>" ><img src="<?php echo $sppic ?>" alt="<?php echo $row['sptitle'] ?>" /></a></div>
            <div class="ptitle fr"><a href="<?php echo link_detail($row['spid'],$row['sptitle'],$row['sploai'],$seg_nsx)?>"><?php echo $row['sptitle'] ?></a></div>
            <div class="pkmai fr"><?php echo $spkm ?></div>
            <div class="pgia fr"><?php echo $spgia ?></div>
            <div class="pdes"><?php echo print_product($row['sploai'],$row) ?></div>
            <div class="pmore">
                <div class="pdetail fl"><a href="<?php echo link_detail($row['spid'],$row['sptitle'],$row['sploai'],$seg_nsx)?>">Chi tiết</a></div>
                <div class="fl"><a href="<?php echo base_url('print')."/". $row['spid']?>" title="In báo giá"><img src="<?php echo base_url();?>style/images/blank.gif" width="23" height="18" align="absmiddle" alt="In báo giá" /></a></div>
                <div class="pdetail fl"><a href="#" onclick="return addCart(<?php echo $row['spid']?>)">Mua hàng</a></div>
            </div>
        </div>
      </li>  
        <?php
    
                }
            }
        ?>
        </ul>
    </div>
    <div class="bgtitle"><b>Danh sách sản phẩm</b></div>
    <div class="brow">
    <?php
        if (isset($product['products']) && count($product['products']) > 0)
            {
                $check = count($product['products']);
                $j=1;
                foreach ($product['products'] as $row)
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
                <div class="fl"><a href="<?php echo base_url('print')."/". $row['spid']?>" title="In báo giá"><img src="<?php echo base_url();?>style/images/blank.gif" width="23" height="18" align="absmiddle" alt="In báo giá" /></a></div>
                <div class="pdetail fl"><a href="#" onclick="return addCart(<?php echo $row['spid']?>)">Mua hàng</a></div>
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
    <select style="border:1px #c6c6c6 solid; width:50px" size="1" onchange="window.location='<?php echo link_cat($cat).link_nsx($seg_nsx)."/priceup/{$priceup}/pricedown/{$pricedown}"?>/page/'+this.options[this.selectedIndex].value;">
    <?php
        $j=1;
        for (;$j<=$product['num_pages']; ++$j)
        {
            if ($j == $page)
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
