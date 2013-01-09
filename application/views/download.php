<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>

<div class="list">
    <form action="<?php echo base_url('print')?>" method="POST" name="baogia" target="_blank">
        <div class="bgtitle"><b>Các file báo giá có sẵn </b></div>
        <?php
            if (isset($download))
            {
                foreach ($download as $row)
                {
        ?>
                    <div class="dline">
                        <div class="fl" style="width:600px">
                            <img src="<?php echo base_url("style/images/read_more.gif")?>" width="9" height="10" style="margin-right:10px"/>
                            <?php echo $row['bgtitle'] ?>
                        </div>
                        <div>
                            <a href="<?php echo base_url().$this->config->item('baogia') . $row['bgdate'] . "." . $row['bgfile']?>" target="blank">Download</a>
                            <img src="<?php echo base_url('style/images/download.png')?>" width="18" height="14" align="absbottom" style="margin-left:10px"/>
                        </div>
                    </div>    
        
        <?php   
                }
            }
        ?>
        <br /><br />
        <div class="bgtitle"><strong>Chọn báo giá bạn cần</strong></div>
        <div class="dline">Hãy chọn nhóm sản phẩm bạn cần xem báo giá</div>
        <div class="dline">
            <div class="fl" style="width:53%">
                <img src="<?php echo base_url('style/images/read_more.gif')?>" width="9" height="10" style="margin-right:10px"/>
                Danh mục sản phẩm con
            </div>
            <div class="fl" style="margin:5px 0px; width:52%">
                <select size="2" name="did" class="select" id="s_parent">
                    <?php
                        if (isset($parent))
                        {
                            foreach($parent as $row)
                            {
                    ?>
                                <option value="<?php echo $row['did']?>"> -> <?php echo $row['dtitle']?> </option>
                    <?php            
                            }
                        }
                        else
                            echo "<option>Không có danh mục con nào</option>"
                    ?>
                </select>
            </div>
            
            <div style="margin:5px 0px">
                <select size="2" name="bgdid[]" multiple class="select" id="s_child">
                    
                </select>
            </div>
        </div>
        <div class="dline">
            <img src="<?php echo base_url('style/images/read_more.gif')?>" width="9" height="10" style="margin-right:10px"/>
            Cho phép hiện thị mô tả ngắn gọn về sản phẩm trong báo giá
            <input type="checkbox" checked name="mota"/>
        </div>
        <div class="dline">
            <input type="submit" class="but" name="inbaogia" value="Xem trang in báo giá" />
        </div>

    </form>

</div>
<div class="bblock">
    <div class="bbotr">
        <div class="bbotl">
        </div>
    </div>
</div>