<div class="tblock">
    <div class="bright">
        <div class="btitle">Lọc tìm nhanh sản phẩm</div>
    </div>
</div>

<div class="content">
    <div class="ttblock"><b>Chọn theo loại sản phẩm</b></div>
    <?php
        if (isset ( $danhmuc )){
            if (count($danhmuc) > 0)
                foreach ($danhmuc as $row)
                    echo "<div class=\"line\"><a href=\"".link_cat($row['did'],$row['dtitle'])."\">".$row['dtitle']."</a></div>";
                    
            else
                echo "<div class=\"line\">Không có danh mục</div>";
            
        }
        
    ?>
    <!--Danh mục -->
    
    <div class="ttblock"><b>Chọn theo thương hiệu</b></div>
    
    <!--Nhà sản xuất -->
    <?php
    if (isset($nsx))
    {
       
        $i=1;
        $check = count($nsx);
        foreach ($nsx as $rows)
        {
          if ($i % 2 != 0)
          {
    ?>
        <div class="loclg"><a href="<?php echo link_cat($cat)."/{$rows['ntitle']}/".$rows['nid'] ?>"  title="<?php echo $rows['ntitle'] ?>"><img src="<?php echo base_url().$this->config->item('logo').$rows['ndate'].".".$rows[
        'npic']?>" alt="<?php echo $rows['ntitle'] ?>" class="fr" /></a>
    <?php
          }
        else
          {
    ?>
        <a href="<?php echo link_cat($cat)."/{$rows['ntitle']}/".$rows['nid'] ?>" title="<?php echo $rows['ntitle'] ?>"><img src="<?php echo base_url().$this->config->item('logo').$rows['ndate'].".".$rows[
        'npic']?>" alt="<?php echo $rows['ntitle'] ?>"/></a></div>
    <?php
          }
            ++$i;
            if ($check < $i && $i % 2 == 0)
            {
                if (isset($seg_nsx) && ($seg_nsx != 0))
                    echo "<a href=\"".link_cat($cat)."\" class=\"delselect\">X Bỏ chọn &raquo;</a></div>";
                else
                    echo "<img src=\"".base_url()."images/blank.gif\" width=\"80\"></div>";
                    
            }
        }
    }
    ?>

    <div class="ttblock"><b>Chọn theo giá sản phẩm (VNĐ) </b></div>
    
    <?php
    if ( isset ($price) )
    {
            if ($priceup!= 0)
                $price_select = "<a href=\"".link_cat($cat).link_nsx($seg_nsx)."/priceup/0/pricedown/0"."\" title=\"Bỏ chọn\"><img src=\"".base_url('/style/images/delicon.png')."\" width=\"17\" style=\"cursor:pointer;margin-left:10px\" align=\"absmiddle\"></a>";
            else
                $price_select = "";
                
            $price['dgia05'] = $price['dgia04'] + 1;
            if (isset($priceup) && $priceup == 0 )
            {
                echo "<div class=\"line\"><a href=\"".link_cat($cat).link_nsx($seg_nsx)."/priceup/1/pricedown/".$price['dgia01']."\">Dưới ".number_format( $price['dgia01'], 0, ",", "." )."</a></div>";
                echo "<div class=\"line\"><a href=\"".link_cat($cat).link_nsx($seg_nsx)."/priceup/".$price['dgia01']."/pricedown/".$price['dgia02']."\">".number_format( $price['dgia01'], 0, ",", "." )." -> ".number_format( $price['dgia02'], 0, ",", "." )."</a></div>";
                echo "<div class=\"line\"><a href=\"".link_cat($cat).link_nsx($seg_nsx)."/priceup/".$price['dgia02']."/pricedown/".$price['dgia03']."\">".number_format( $price['dgia02'], 0, ",", "." )." -> ".number_format( $price['dgia03'], 0, ",", "." )."</a></div>";
                echo "<div class=\"line\"><a href=\"".link_cat($cat).link_nsx($seg_nsx)."/priceup/".$price['dgia03']."/pricedown/".$price['dgia04']."\">".number_format( $price['dgia03'], 0, ",", "." )." -> ".number_format( $price['dgia04'], 0, ",", "." )."</a></div>";
                echo "<div class=\"line\"><a href=\"".link_cat($cat).link_nsx($seg_nsx)."/priceup/".$price['dgia05']."/pricedown/".$price['dgia05']."\">Trên ".number_format( $price['dgia04'], 0, ",", "." )."</a></div>";
            }
            else
            {
                if ($priceup == 1)
                    echo "<div class=\"line\"><a href=\"#\">Dưới ".number_format( $price['dgia01'], 0, ",", "." )."</a>{$price_select}</div>";
                if ($priceup == $price['dgia01'])
                    echo "<div class=\"line\"><a href=\"#\">".number_format( $price['dgia01'], 0, ",", "." )." -> ".number_format( $price['dgia02'], 0, ",", "." )."</a>{$price_select}</div>";
                if ( $priceup == $price['dgia02'] )
                    echo "<div class=\"line\"><a href=\"#\">".number_format( $price['dgia02'], 0, ",", "." )." -> ".number_format( $price['dgia03'], 0, ",", "." )."</a>{$price_select}</div>";
                if ( $priceup == $price['dgia03'] )
                    echo "<div class=\"line\"><a href=\"#\">".number_format( $price['dgia03'], 0, ",", "." )." -> ".number_format( $price['dgia04'], 0, ",", "." )."</a>{$price_select}</div>";
                if ( $priceup == $price['dgia05'] )
                    echo "<div class=\"line\"><a href=\"#\">Trên ".number_format( $price['dgia04'], 0, ",", "." )."</a>{$price_select}</div>";
                if ( $priceup == "6000000" )
                    echo "<div class=\"line\"><a href=\"#\">Trên ".number_format( $price['dgia04'], 0, ",", "." )."</a>{$price_select}</div>";
            }
    } 
    else
    {
        echo "<div class=\"line\">Không có mức giá nào</div>";
    }
    ?>
    
    <div class="bblock">
        <div class="bbotr">
            <div class="bbotl">
            </div>
        </div>
    </div>
</div>
