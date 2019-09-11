<?php
$array1 = array("hà nội", "thanh hoá", "nghệ an","hà tĩnh", "hồ chí minh");
echo "<pre>";
print_r($array1);
echo "</pre>";
/**
 * Cú pháp rút gọn
 */
foreach($array1 as $value) {
    echo "<br>" . $value;
}
/**
 * cú pháp lặp mảng đầy đủ
 */
foreach($array1 as $key => $value) {
    echo "<br>" . $key . " - " . $value;
}
/**
 * Cú pháp ít dùng
 */
foreach($array1 as $key => $value) {
    echo "<br>" . $key . " - " . $array1[$key];
}