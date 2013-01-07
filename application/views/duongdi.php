<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>

<div class="list">
    <?php
        if (isset($duongdi))
        {
    ?>  
            <p align="center"><img src="<?php echo $this->config->item('logo') . $duongdi['sddate'] . "." . $duongdi['sdpic'] ?>" border="0" style="width:100%"/></p><br />
            <?php echo $duongdi['sdcont'] ?>
            <br /><br />
            <p align="right">
                <font size="1">Cập nhật: <?php echo gmdate( "H:i A - d/m/Y", $duongdi['sddate'] + 25200 ) ?></font>
            </p>
            
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