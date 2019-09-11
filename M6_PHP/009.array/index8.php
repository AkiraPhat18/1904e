<?php
//mảng bất tuần tự
$array3 = array();
$array3["crush"] = array("name" => "crush", "fullname" => array("trang pi", "phương hồng", "quỳnh", "thanh hằng "));
$array3["japan"] = array("name" => "nhật bản", "city" => array("tokyo") );
$array3["namdinh"] = array("name" => "nam định", "district" => array("xuân trường", "nam trực", "trực ninh", "nghĩa hưng",
    "giao thủy", "vụ bản"));

echo "<pre>";
print_r($array3);
echo "</pre>";

echo "<br>". $array3["crush"]["name"];
echo "<br>". $array3["japan"]["name"];
echo "<br>". $array3["namdinh"]["name"];

echo "<br>". $array3["namdinh"]["district"][0];
echo "<br>". $array3["namdinh"]["district"][1];
echo "<br>". $array3["namdinh"]["district"][2];
