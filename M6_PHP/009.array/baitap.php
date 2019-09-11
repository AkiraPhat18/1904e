<?php
//mảng bất tuần tự
$array3 = array();
$array3["china"] = array("name" => "trung quốc",
    "city" => array("thượng hải", "bắc kinh", "thâm quyến ", "thành đô "));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo") );
$array3["vn"] = array("name" => "việt nam",
    "city" => array("hà nội", "hồ chí minh","nam định", "đồng nai","thái bình", "phủ lý") );

//tên các key , value khác nhau
//mỗi ul 1 quốc gia gồm các thành phố
echo "<ul>";
foreach ($array3 as $keyCountry => $Country){
    foreach ($Country as $keyCities => $cities){
        if ($keyCities == "name"){
            echo "<ul>";
            echo "<li>".$cities;

        }else {
            foreach ($cities as $keyCity => $city) {
                echo "<ul>";
                echo "<li> " . $city;
                echo "</ul>";
            }
        }
    }
    echo "</ul>";
}
echo "</ul>";