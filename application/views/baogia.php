<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>In báo giá</title>
    <style type="text/css">
    
        body,td{
            font:normal 12px Tahoma;
        }
    </style>
</head>
<body>
            <table cellpadding="1" cellspacing="1" border="0" style="border:1px solid #ccc; padding:5px">
                <tr>
                    <td>
                        <img src="<?php echo base_url('style/images/logotop.gif') ?>" height="71" border="0" />
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <?php echo $this->config->item('address') ?>.
                        Tel : <?php echo $this->config->item('tel')?><br />
                        <?php echo $this->config->item('website')?>
                    </td>
                </tr>
                
                <tr>
                    <td align="center">
                        <font face="Times New Roman"><b><h1>BẢNG BÁO GIÁ</h1></b></font>
                    </td>
                </tr>
                
                <tr>
                    <td align="center">
                        <table cellpadding="0" cellspacing="0" border="1" width="650" bgcolor="#A2A2A2" style="border-collapse: collapse;">
                        <?php
                         if($this->uri->segment(2))
                         {
                        ?>
                            <tr bgcolor="#F1F1F1" height="25">
                                <td align="center"><b>Sản phẩm</b></td>
                                <td align="center" width="65"><b>Bảo hành</b></td>
                                <td align="center" width="90"><b>Báo giá VNĐ</b></td>
                            </tr>
                        <?php
                       
                            if (isset($info) && !empty($info))
                            {
                        ?>
                                <tr bgcolor="#ffffff">
                                    <td align="justify" style="padding:5px">
                                        <?php
                                            if (!empty($info['sppic']))
                                                echo "<img src=". base_url() . $this->config->item('product') . "thumb_" . $info['spdate'] . "." . $info['sppic'] ." border=\"0\" width=\"250\" align=\"right\" />";
                                        ?>
                                        <b><?php echo $info['sptitle']?></b><br /><br />
                                        <?php
                                            if (empty($info['spcont']))
                                                echo $info['spdes'];
                                            else
                                                echo $info['spcont'];
                                        ?>
                                        
                                    </td>
                                    <td align="center">
                                        <b><?php echo $info['spbh'] ?></b>
                                    </td>
                                    <td align="center">
                                        <b><?php echo number_format($info['spgia'],0,",",".") ?></b>
                                    </td>
                                </tr>
                        
                        <?php        
                            }
                            else
                            {
                                echo "<tr bgcolor=\"#ffffff\"><td colspan=\"3\" align=\"center\" height=\"22\">Không có sản phẩm nào !</td></tr>";
                            }
                        }
                        else
                        {
                        ?>
                            <tr bgcolor="#f1f1f1">
                                <td align="center" width="35" height="25"><b>STT</b></td>
                                <td align="center"><b>Sản phẩm</b></td>
                                <td align="center" width="63"><b>Bảo hành</b></td>
                                <td align="center" width="92"><b>Giá VNĐ</b></td>
                            </tr>
                        <?php       
                            if (isset($list_product))
                            {
                                foreach ($list_product as $row => $value)
                                {
                                ?>
                                    <tr bgcolor="#f8ffff">
                                        <td colspan="4" align="center" height="22">
                                            <font color="blue"><b>Loại sản phẩm - <?php echo $row ?></b></font>
                                        </td>
                                    </tr>
                                <?php
                                    $stt = 1;
                                    foreach ($value as $_row)
                                    {
                                ?>
                                        <tr bgcolor="#ffffff">
                                            <td align="center" width="35" height="22"><?php echo $stt ?></td>
                                            <td align="justify" style="padding: 5px;">
                                                <b><?php echo $_row['sptitle']?></b><br />
                                                <?php
                                                    if ($mota=='on')
                                                        echo "<br />{$_row['spdes']}"
                                                ?>
                                            </td>
                                            <td align="center" width="60">
                                                <b><?php echo "{$_row['spbh']}t"?></b>
                                            </td>
                                            <td align="right" width="95" style="padding-right:5px;">
                                                <b><?php echo number_format($_row['spgia'],0,",",".")?></b>
                                            </td>
                                        </tr>
                                            
                                        
                                <?php
                                        $stt++;
                                    } 
                                }
                            }
	
                        }
                        ?>
                        </table>
                    </td>
                </tr>
            
                <tr>
                    <td height="70" align="right">
                        <font size="1">
                            <b>Chú ý </b>: Báo giá được xây dựng lúc <?php echo gmdate("h:i A d-m-Y", time( ) + 25200)?><br />
                            Giá trên chỉ mang tính chất tham khảo và đã bao gồm thuế VAT<br />Giá trên có thể thay đổi bất cứ khi nào mà không cần báo trước<br />Mọi chi tiết xin liên hệ phòng kinh doanh.
                            
                        </font>
                    </td>
                </tr>
                <tr bgcolor="#ffffff">
                    <td height="40" align="center"><b>CẢM ƠN QUÝ KHÁCH ĐÃ QUAN TÂM ĐẾN SẢN PHẨM CÔNG TY CHÚNG TÔI</b></td>
                </tr>
            </table>
</body>
</html>