<?php
$array2 = array();
$array2["hn"] = "hà nội";
$array2["th"] = "thanh hoá";
$array2["na"] = "nghệ an";
$array2["ht"] = "hà tĩnh";
$array2["hc"] = "hồ chí minh";
$array2[12] = "đồng nai";

echo "<pre>";
print_r($array2);
echo "</pre>";

$newArray = array_keys($array2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
