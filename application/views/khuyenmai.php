<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>
<div class="list">
    <?php
        if( isset($khuyenmai) )
        {
    ?>
            <p align="center"><img src="<?php echo base_url(). $this->config->item('logo') . $khuyenmai['kmdate'] . "." . $khuyenmai['kmpic']?>" border="0"/></p><br />
            <?php echo $khuyenmai['kmcont'] ?><br /><br />
            <p align="right">
                <font size="1">Cập nhật: <?php echo gmdate("H:i A - d/m/Y", $khuyenmai['kmdate'] + 25200)?></font>
            </p>
    <?php
        }
    ?>
</div>

<div class="bblock">
    <div class="bbotr">
        <div class="bbotl"></div>
    </div>
</div>