
<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>
<div class="list">
     <form name="contact" id="contact" style="margin:0px" onsubmit="return lienhe();" method="post" action="<?php echo base_url('lien-he'); ?>">
     
        <table cellpadding="1" cellspacing="1" border="0">
        
            <tr>
                <td></td>
                <td align="left">
                    <b><?php echo $this->config->item('company') ?></b> <br /><br />
                    Địa chỉ: <?php echo $this->config->item('address') ?><br />
                    Điện thoại : <?php echo $this->config->item('tel') ?> <br />
                    Website: <a href="<?php echo $this->config->item('website') ?>"><?php echo $this->config->item('website') ?></a>
                </td>
            </tr>
            
            <tr>
                <td height="10"></td>
                <td align="left"></td>
            </tr>
            
            <tr>
                <td width="200" height="10"></td>
                <td align="left" class="mess">
                <?php
                    if (isset($mess)) { echo $mess; }
                ?>
                
                </td>
            </tr>
            
            <tr>
                <td height="10"></td>
                <td align="left"></td>
            </tr>
            
            <tr>
                <td height="22" align="right">Họ và tên: </td>
                <td align="left"><input tabindex="1" size="53" style="width:350px" type="text" id="fullname" name="fullname" value="<?php echo set_value('fullname') ?>" /></td>
            </tr>
            
            <tr>
                <td height="22" align="right">Email :</td>
                <td align="left"><input tabindex="2" size="53" style="width:350px" type="text" id="email" name="email" value="<?php echo set_value('email') ?>"/></td>
            </tr>
            
            <tr>
                <td height="22" align="right">Điện thoại:</td>
                <td align="left"><input tabindex="3" size="53" style="width:350px" type="text" id="phone" name="phone" value="<?php echo set_value("phone") ?>" /></td>
            </tr>
            
            <tr>
                <td height="22" align="right">Tiêu đề: </td>
                <td align="left"><input tabindex="4" size="53" style="width: 350px;" type="text" id="subject" name="subject" value="<?php echo set_value("subject") ?>"/></td>
            </tr>
            
            <tr>
                <td height="22" align="right">Nội dung:</td>
                <td align="left"><textarea tabindex="5" id="content" cols="40" rows="10" style="width: 350px; height:150px;" name="content"><?php echo set_value("content") ?></textarea></td>
            </tr>
            
            <tr>
                <td height="22" align="right">Mã xác nhận</td>
                <td align="left"><input tabindex="6" type="text" id="code" style="width:100px" name="code"/><img src="<?php echo base_url('captcha')?>" border="0" align="absmiddle" style="margin:0 0 0 20px" /></td>
                
            </tr>
            
            <tr>
                <td></td>
                <td align="left"><input tabindex="7" type="submit" id="submit" value="Gửi liên hệ" class="button" border="0"/></td>
            </tr>
            
        </table>
     </form>
 </div>
 
 <div class="bblock">
    <div class="bbotr">
        <div class="bbotl">
        </div>
    </div>
 </div>