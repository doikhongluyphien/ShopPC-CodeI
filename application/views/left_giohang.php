<div class="giohang">
    <div class="noidung">
        <?php
            if ($this->cart->contents())
            {
        ?>
                <div class="line">
                    Bạn đã chọn <b><?php echo $this->cart->total_items() ?> sản phẩm </b>
                </div>
                <div class="line">
                    Tổng tiền : <b><?php echo number_format($this->cart->total(),0,",","."); ?> VNĐ</b>
                </div>
                <div style="padding-top:5px; text-align:right;font:bold 11px Tahoma"><a href="<?php echo base_url('gio-hang') ?>">Chi tiết</a></div>
        <?php 
            }
            else
            {
        ?>
                <div style="width:190px;padding:20px 0 20px 10px">
                    <div class="line">Bạn chưa chọn sản phẩm nào</div>
                </div>
        <?php        
            }
        ?>
    </div>
</div>