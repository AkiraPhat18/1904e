<?php
//mảng bất tuần tự
$array2 = array();
$array2["hn"] = "hà nội";
$array2["th"] = "thanh hoá";
$array2["na"] = "nghệ an";
$array2["ht"] = "hà tĩnh";
$array2["hc"] = "hồ chí minh";
$array2[12] = "long an";

/**
 * truy xuất vào mảng kết hợp
 */

echo "<br>".$array2["hn"];
echo "<br>".$array2["th"];
echo "<br>".$array2["na"];
echo "<br>".$array2["ht"];
echo "<br>".$array2["hc"];

echo "<pre>";
print_r($array2);
echo "</pre>";

foreach ($array2 as $value) {
    echo "<br>" . $value;
}

foreach ($array2 as $key => $value) {
    echo "<br>" . $key . " - " . $value;
}

// cú pháp ít dùng
foreach ($array2 as $key => $value) {
    echo "<br>" . $key . " - " . $array2[$key];
}