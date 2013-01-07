<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>

<div class="list">
    <?php
        if (isset($gioithieu))
        {
    ?>
            <?php echo $gioithieu['gtcont'] ?>
            <br /><br />
            <p align="right">
                <font size="1">Cập nhật: <?php echo gmdate( "H:i A - d/m/Y", $gioithieu['gtdate'] + 25200 ) ?></font>
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