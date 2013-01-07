<div class="hblock">
    <div class="btopr">
        <div class="btopl">
        </div>
    </div>
</div>
<div class="list" style="text-align:justify">
    <table cellpadding="0" cellspacing="0" border="0">
        <tr>
            <?php
                if (isset($news)){
                    $i = 1;
                    foreach ($news as $row)
                    {
            ?>
                        <td width="49%" align="justify" style="padding:10px 5px">
                            <a href="<?php echo base_url('tin-tuc'). "/" . $row['nid'] ?>" title="Chi tiết">
                                <img src="<?php echo base_url(). $this->config->item('tintuc') . "icon_" . $row['ndate'] . "." . $row['npic'] ?>" border="0" width="85" height="85" align="left" style="border:1px solid #ccc; margin-right:10px" />
                            </a>
                            <?php echo $row['nshort'] ?>
                            <p align="right"><a href="<?php echo base_url('tin-tuc'). "/" . $row['nid'] ?>"><i>Chi tiết</i></a></p> 
                        </td>
            
            <?php
                        if ($i % 2 == 0)
                            echo "</tr><tr>";
                        else if ($i <= count($news))
                            echo "<td></td>";
                        $i++;
                        
                                      
                    }
                    
                }
            
            ?>
        
        </tr>
    
    </table>
</div>
<div class="bblock">
    <div class="bbotr">
        <div class="bbotl">
        </div>
    </div>
</div>