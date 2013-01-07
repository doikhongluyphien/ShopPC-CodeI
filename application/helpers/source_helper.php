<?php
    function print_product($sploai, $row)
    {

        if ( $sploai == "11" )
        {
            return "<b>Socket</b>: ".$row['spd03']."<br><b>Tốc độ</b>: ".$row['spd02']."<br><b>Cache</b>: ".$row['spd04']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "12" )
        {
            return "<b>Chipset</b>: ".$row['spd03']."<br><b>Socket</b>: ".$row['spd02']."<br><b>VGA Onboard</b>: ".$row['spd05']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "13" )
        {
            return "<b>Tốc độ Bus</b>: ".$row['spd03']."<br><b>Dung lượng</b>: ".$row['spd02']."<br><b>Loại Ram</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "14" )
        {
            return "<b>Cache</b>: ".$row['spd03']."<br><b>Dung lượng</b>: ".$row['spd02']."<br><b>Chuẩn</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "15" )
        {
            return "<b>Chipset</b>: ".$row['spd03']."<br><b>Dung lượng</b>: ".$row['spd02']."<br><b>Loại Ram</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "16" )
        {
            return "<b>Độ phân giải</b>: ".$row['spd03']."<br><b>Kích thước</b>: ".$row['spd02']."<br><b>Màn hình</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "17" )
        {
            return "<b>Kết nối</b>: ".$row['spd02']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        else if ( $sploai == "18" )
        {
            return "<b>Kênh ra</b>: ".$row['spd02']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        else if ( $sploai == "19" )
        {
            return "<b>Tốc độ</b>: ".$row['spd03']."<br><b>Loại</b>: ".$row['spd02']."<br><b>Chuẩn</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "20" )
        {
            return "<b>Màn hình</b>: ".$row['spd02']."<br><b>Vỏ Case</b>: Desktop<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        else if ( $sploai == "21" )
        {
            return "<b>Công suất</b>: ".$row['spd02']."<br><b>Nguồn</b>: Desktop<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        else if ( $sploai == "22" )
        {
            return "<b>Kết nối</b>: ".$row['spd02']."<br><b>Chuột</b>: ".$row['spd03']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        else if ( $sploai == "44" )
        {
            return "<b>Điều khiển</b>: ".$row['spd03']."<br><b>Kênh ra</b>: ".$row['spd02']."<br><b>Kết nối</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "45" )
        {
            return "<b>Công suất</b>: ".$row['spd02']."<br><b>Kết nối</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "10" )
        {
            return "<b>Dung lượng</b>: ".$row['spd03']."<br><b>Màu sắc</b>: ".$row['spd02']."<br><b>Chống sốc</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "2" )
        {
            return "<b>CPU</b>: ".$row['spd03']."<br><b>RAM</b>: ".$row['spd02']."<br><b>HDD</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "3" )
        {
            return "<b>CPU</b>: ".$row['spd03']."<br><b>RAM</b>: ".$row['spd02']."<br><b>Màn hình</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "23" )
        {
            return "<b>Điện áp</b>: ".$row['spd03']."<br><b>Công suất</b>: ".$row['spd02']."<br><b>Thời gian lưu điện</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "1" )
        {
            return "<b>Trọng lượng</b>: ".$row['spd03']."<br><b>Kích thước</b>: ".$row['spd02']."<br><b>Zoom quang học</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "24" )
        {
            return "<b>Trọng lượng</b>: ".$row['spd03']."<br><b>Kích thước</b>: ".$row['spd02']."<br><b>Độ phân giải</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "25" )
        {
            return "<b>Dung lượng</b>: ".$row['spd01']."<br><b>Kích thước</b>: ".$row['spd02']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng";
        }
        else if ( $sploai == "28" )
        {
            return "<b>Sản phẩm</b>: ".$row['sptitle']."<br><b>Kiểu máy in</b>: ".$row['spd01']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        else
        {
            return "<b>Sản phẩm</b>: ".$row['sptitle']."<br><b>Bảo hành</b>: ".$row['spbh']." tháng<br><b>Kho</b>: ".$row['spkho'];
        }
        
    }
    
    function print_detail_product($sploai, $row)
    {
        if ( $sploai == "11" )
        {
            return "<div class=\"tieude fl\">Dòng CPU:</div><div class=\"ndung fl\">".$row['spd01']."</div><div class=\"tieude fl\">Socket:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Tốc độ:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Tốc độ Bus:</div><div class=\"ndung fl\">".$row['spd05']."</div><div class=\"tieude fl\">Cache:</div><div class=\"ndung fl\">".$row['spd04']."</div>";
        }
        else if ( $sploai == "12" )
        {
            return "<div class=\"tieude fl\">Chipset:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Socket:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">VGA Onboard:</div><div class=\"ndung fl\">".$row['spd05']."</div>";
        }
        else if ( $sploai == "13" )
        {
            return "<div class=\"tieude fl\">Tốc độ Bus:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Dung lượng:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Loại Ram:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "14" )
        {
            return "<div class=\"tieude fl\">Cache:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Dung lượng:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Chuẩn:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "15" )
        {
            return "<div class=\"tieude fl\">Chipset:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Dung lượng:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Loại Ram:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "16" )
        {
            return "<div class=\"tieude fl\">Độ phân giải:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Kích thước:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Màn hình:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "17" )
        {
            return "<div class=\"tieude fl\">Kết nối:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Bàn phím:</div><div class=\"ndung fl\">Desktop</div>";
        }
        else if ( $sploai == "18" )
        {
            return "<div class=\"tieude fl\">Kênh ra:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Chuẩn:</div><div class=\"ndung fl\">PCI</div>";
        }
        else if ( $sploai == "19" )
        {
            return "<div class=\"tieude fl\">Tốc độ:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Loại:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Chuẩn:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "20" )
        {
            return "<div class=\"tieude fl\">Màn hình:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Vỏ Case:</div><div class=\"ndung fl\">Desktop</div>";
        }
        else if ( $sploai == "21" )
        {
            return "<div class=\"tieude fl\">Công suất:</div><div class=\"ndung fl\">".$row['spd02']."</div>";
        }
        else if ( $sploai == "22" )
        {
            return "<div class=\"tieude fl\">Kết nối:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Kiểu chuột:</div><div class=\"ndung fl\">".$row['spd03']."</div>";
        }
        else if ( $sploai == "44" )
        {
            return "<div class=\"tieude fl\">Điều khiển:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Kênh ra:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Kết nối:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "45" )
        {
            return "<div class=\"tieude fl\">Công suất:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Kết nối:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "10" )
        {
            return "<div class=\"tieude fl\">Dung lượng:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Màu sắc:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Chống sốc:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "2" )
        {
            return "<div class=\"tieude fl\">CPU:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">RAM:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">VGA Card:</div><div class=\"ndung fl\">".$row['spd04']."</div><div class=\"tieude fl\">HDD:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "3" )
        {
            $spd05_ = explode( "-OS-", $row['spd05'] );
            if ( !empty( $spd05_[0] ) )
            {
                $spd05 = $spd05_[0];
            }
            else
            {
                $spd05 = "&nbsp;";
            }
            if ( !empty( $spd05_[1] ) )
            {
                $spd06 = $spd05_[1];
            }
            else
            {
                $spd06 = "&nbsp;";
            }
            return "<div class=\"tieude fl\">CPU:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">RAM:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">HDD:</div><div class=\"ndung fl\">".$spd06."</div><div class=\"tieude fl\">VGA Card:</div><div class=\"ndung fl\">".$row['spd04']."</div><div class=\"tieude fl\">Màn hình:</div><div class=\"ndung fl\">".$row['spd01']."</div><div class=\"tieude fl\">Hệ điều hành:</div><div class=\"ndung fl\">".$spd05."</div>";
        }
        else if ( $sploai == "23" )
        {
            return "<div class=\"tieude fl\">Điện áp:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Công suất:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Thời gian lưu điện:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "1" )
        {
            return "<div class=\"tieude fl\">Trọng lượng:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Kích thước:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Zoom quang học:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "24" )
        {
            return "<div class=\"tieude fl\">Trọng lượng:</div><div class=\"ndung fl\">".$row['spd03']."</div><div class=\"tieude fl\">Kích thước:</div><div class=\"ndung fl\">".$row['spd02']."</div><div class=\"tieude fl\">Độ phân giải:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else if ( $sploai == "25" )
        {
            return "<div class=\"tieude fl\">Dung lượng:</div><div class=\"ndung fl\">".$row['spd01']."</div><div class=\"tieude fl\">Kích thước:</div><div class=\"ndung fl\">".$row['spd02']."</div>";
        }
        else if ( $sploai == "28" )
        {
            return "<div class=\"tieude fl\">Kiểu máy in:</div><div class=\"ndung fl\">".$row['spd01']."</div>";
        }
        else
        {
            return "";
        }
    }
    
    
    function getImageDetail($link)
    {
        
        if ( @getimagesize( $link.".jpg" ) )
        {
            return $link.".jpg";
        }
        else if ( @getimagesize( $link.".gif" ) )
        {
            return $link.".gif";
        }
        else if ( @getimagesize( $link.".png" ) )
        {
            return $link.".png";
        }
        else if ( @getimagesize( $link.".bmp" ) )
        {
            return $link.".bmp";
        }
        else{
            return "";
        }
    }
?>