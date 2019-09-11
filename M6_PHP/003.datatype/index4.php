<?php
//Kiểu dữ liệu dạng mảng chứa nhiều giá trị
//khai báo mảng sử dựng từ khóa array() hoặc [] ( ngoặc vuông dùng trong php 7 )
$arr1 = array(1,2,3,4,5);
$arr2 = array("Quyên","Quỳnh","Mai","Phương","Hằng","Uyên");
$arr3 = array(true,false,true,false);

echo "<pre>";
print_r($arr1);//in ra tất cả vị trí phần tử trong mảng
echo "</pre>";

echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<pre>";
print_r($arr3);
echo "</pre>";

var_dump($arr1);

?>



