<?php
$crush = array("trang pi", "phương hồng", "nguyễn quỳnh ", "thanh hằng" );

echo "<pre>";
print_r($crush);
echo "</pre>";
/**
 * array_pop thêm phần tử vào cuối mảng
 */
array_pop($crush);
echo "<pre>";
print_r($crush);
echo "</pre>";