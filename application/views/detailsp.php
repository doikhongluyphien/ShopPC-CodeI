
<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>

<div class="list">
    
    <!-- Begin chi tiet san pham -->
    
    <?php 
        if (isset($detail) && count($detail) > 0)
        {
            $row = $detail['detail'];
            
    ?>
    <div class="bgtitle"><b>Chi tiết sản phẩm</b></div>
    <div class="detail">
        <div class="bname"><?php echo $row['sptitle'] ?></div>
        <div class="bimage fl">
            <div class="highslide-gallery">
                <?php
                    if (!empty($row['sppic']))
                    {
                         $pthumb = base_url().$this->config->item('product')."thumb_".$row['spdate'].".".$row['sppic'];
                         
                         
                         $pta = base_url().$this->config->item('product')."TA01_".$row['spdate'];
                         
                         
                         if (getImageDetail($pta) != "")
                             $sta01 = getImageDetail($pta);
                         else
                             $sta01 = $pthumb;
         
                         echo "<a id=\"thumb1\" href=\"".$sta01."\" class=\"highslide\" onclick=\"return hs.expand(this)\" title=\"Xem ảnh to\"><img src=\"".$pthumb."\" alt=\"Xem ảnh to\" class=\"fullpic\"></a>";
                                
                    }
                    else
                    {
                        echo "<img src=\"".base_url()."/images/nothumb.jpg\" class=\"fullpic\">";
                    }
                    
                    
                ?>

                <div class="hidden-container">
                    <?php 
                        $pta = base_url().$this->config->item('product')."TA02_".$row['spdate']; 
                         if (getImageDetail($pta) != "")
                            echo "<a href=\"".getImageDetail($pta)."\" class=\"highslide\" onclick=\"return hs.expand(this, { thumbnailId: 'thumb1' })\"></a>";
                            
                         $pta = base_url().$this->config->item('product')."TA03_".$row['spdate'];
                         if (getImageDetail($pta) !="")
                            echo "<a href=\"".getImageDetail($pta)."\" class=\"highslide\" onclick=\"return hs.expand(this, { thumbnailId: 'thumb1' })\"></a>";
                    ?>
                </div>
                
            </div>
        </div>
        
        <div class="binfo fr">
            <div class="tieude fl">Giá bán:</div>
            <div class="ndung fl">
                <font size="2" color="#FF8D1D"><b>
                <?php 
                    if ($row['spgia']!=0)
                        echo number_format($row['spgia'],0,',','.')."VNĐ";
                    else
                        echo "Call";
                
                ?></b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <font size="1" color="red">(<b><?php echo $row['spvat'] ?></b>)</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <img src="<?php echo base_url('images/muahang.png'); ?>" align="absmiddle" width="108" height="22" style="cursor:pointer" onclick="#"/>
                
            </div>
            <div class="tieude fl">Bảo hành:</div>
            <div class="ndung fl"><b><?php echo $row['spbh']; ?></b></div>
            <div class="tieude fl">Khuyến mãi: </div>
            <div class="ndung fl"><b>
            <?php
                if ($row['spkm'] != "")
                    echo $row['spkm'];
                else
                    echo "Không";
            ?>
            </b></div>
            <div class="tieude fl">Trong kho:</div>
            <div class="ndung fl"><b><?php echo $row['spkho'] ?></b></div>
            <div class="tieude fl">Thông tin sơ lược:</div>
            <div class="ndung fl"><?php echo $row['spdes'] ?></div>
            <div class="pline"></div>
        </div>
        <div class="clear"></div>
        
       
        
        <!-- Begin cung loai san pham  -->
        
        <div class="bimage fl">
            <div class="bgtitle"><b>Sản phẩm cùng loại</b></div>
            <?php
                if ( isset( $detail['sameProduct'] ) && count( $detail['sameProduct'] ) > 0 )
                {
                    foreach ($detail['sameProduct'] as $row_)
                    {
                        
            ?>
            <div class="brow">
                <div class="bcol fl">
                    <div class="ppic fl">
                        <a href="<?php echo link_detail($row_['spid'],$row_['sptitle'],$row_['sploai'],$seg_nsx)?>" title="<?php echo $row_['sptitle']; ?>">
                            <img src="<?php 
                                if ( !empty( $row_['sppic'] ) )
                                    echo base_url($this->config->item('product')."icon_".$row_['spdate'].".".$row_['sppic']);
                                else
                                    echo base_url('images/noimg.jpg');
                            ?>" alt="<?php echo $row_['sptitle'] ?>"/>
                        </a>
                    </div>
                    <div class="ptitle fr">
                        <a href="<?php echo link_detail($row_['spid'],$row_['sptitle'],$row_['sploai'],$seg_nsx)?>"><?php echo $row_['sptitle'] ?></a>
                    </div>
                    <div class="pkmai fr">
                    <?php
                        if ( $row_['spkm'] != "" )
                            echo "Có khuyến mãi";
                    ?>
                    </div>
                    <div class="pgia fr">
                    <?php
                        if ( $row_['spgia'] != 0 )
                            echo number_format($row_['spgia'],0,',','.');
                        else
                            echo "Call";
                    ?>
                    </div>
                    <div class="pdes"><?php echo print_product( $row_['sploai'], $row_ ) ?></div>
                    <div class="pmore">
                        <div class="pdetail fl">
                            <a href="<?php echo link_detail($row_['spid'],$row_['sptitle'],$row_['sploai'],$seg_nsx)?>">Chi tiết</a>
                        </div>
                        <div class="fl">
                            <a href="<?php echo base_url('print')."/". $row_['spid']?>" title="In báo giá"><img src="<?php echo base_url('style/images/blank.gif') ?>" width="23" height="18" align="absmiddle" alt="In báo giá" /></a>
                        </div>
                        <div class="pdetail fl">
                            <a href="#" onclick="alert('Bạn đã thêm sản phẩm này vào giỏ hàng!');">Mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
           <?php
                    }
                }
           ?> 
            
            
        </div>
        
        <!-- End dung loai san pham -->
        
        <div class="binfo fr">
            <div class="bgtitle"><b>Thông tin chi tiết</b></div>
            <div class="tieude fl">Hãng sản xuất:</div>
            <div class="ndung fl"><?php 
                if ( isset ( $detail['nsx_title'] ) )
                    echo $detail['nsx_title'];
            ?></div><?php echo print_detail_product( $row['sploai'], $row ) ?>
            <div class="tieude fl">Thông tin:</div>
            <div class="ndung fl"><?php echo $row['spcont'] ?></div>
            <div class="pline">
                <a href="<?php echo base_url('print')."/". $row['spid']?>" title="Quay về trang trước"><img src="<?php echo base_url('style/images/return-1.gif')?>" align="absmiddle" border="0" />&nbsp;&nbsp;Bản in</a>&nbsp;&nbsp;
                <a href="#"><img src="<?php echo base_url('style/images/top-1.gif')?>" align="absmiddle" border="0" />&nbsp;&nbsp;Lên đầu trang</a>
            </div>
        </div>
        
         <!-- End chi tiet san pham -->
         
    </div>
    <?php
    
        }
    
    ?>
</div>
<div class="bblock">
    <div class="bbotr">
        <div class="bbotl">
        </div>
    </div>
</div>