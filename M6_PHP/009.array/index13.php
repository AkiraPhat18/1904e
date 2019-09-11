<?php
//mảng bất tuần tự
$array3 = array();
$array3["crush"] = array("name" => "crush", "fullname" => array("trang pi", "phương hồng", "nguyễn quỳnh ", "thanh hằng "));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo") );
$array3["namdinh"] = array("name" => "nam định", "district" => array("xuân trường", "nam trực", "trực ninh", "nghĩa hưng",
    "giao thủy", "vụ bản"));
$array3["vn"] = array("name" => "việt nam", "city" => array("hà nội", "hồ chí minh") );

//tên các key , value khác nhau
foreach ($array3 as $keyPeople => $people){
    foreach ($people as $keyCrush => $crushinfo){
        if ($keyCrush == "fullname"){
            foreach ($crushinfo as $keyCrush => $crush)
            echo "<br>" . $crush;
            echo "<hr>";
        }
    }
}
