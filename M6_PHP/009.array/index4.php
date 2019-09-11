<?php
//khai báo kiểu 1
$crush = array("trang pi", "phương hồng", "quỳnh", "thanh hằng ");

//cách 2
$crush = array(0 => "trang pi", 1=> "phương hồng",2 =>  "quỳnh",3 => "thanh hằng ");

//cách 3
$crush = array();
$crush[] = "trang pi";
$crush[] = "phương hồng";
$crush[] = "quỳnh";
$crush[] = "thanh hằng";

//cách 4
$crush = array();
$crush[0] = "trang pi";
$crush[1] = "phương hồng";
$crush[2] = "quỳnh";
$crush[3] = "thanh hằng";

print_r($crush);