<?php
$array1 = array("hà nội", "thanh hoá", "nghệ an","hà tĩnh", "hồ chí minh");
echo "<pre>";
print_r($array1);
echo "</pre>";
/**
 * Truy xuất vào các phần tử của mảng thông qua key
 */
echo "<br>" . $array1[0];
echo "<br>" . $array1[1];
echo "<br>" . $array1[2];
echo "<br>" . $array1[3];
echo "<br>" . $array1[4];
/**
 * Gán lại value cho 1 phần tử trong mảng
 * thông qua key
 */
$array1[0] = "Nam Trực quê Quỳnh";
$array1[4] = "Xuân Trường quê Hằng";
echo "<pre>";
print_r($array1);
echo "</pre>";
