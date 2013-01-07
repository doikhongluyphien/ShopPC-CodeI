<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>

<div class="list">
    <?php
        if (isset($baohanh))
        {
    ?>
            <?php echo $baohanh['bhcont'] ?>
            <br /><br />
            <p align="right">
                <font size="1">C?p nh?t: <?php echo gmdate( "H:i A - d/m/Y", $baohanh['bhdate'] + 25200 ) ?></font>
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