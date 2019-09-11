<?php
//cú pháp thay thế if else dùng cho phép gán giá trị
/*$a = (điều kiện) ? giá trị 1 : giá trị 2;
    điều kiện là true sẽ lấy sau ? là giá trị 1 gán cho $a
    điều kiện là false sẽ lấy giá trị sau : gán cho $a*/
$luong = 12000000;
$thue = ($luong > 9000000) ? ($luong*5/100) : 0;
echo "<br>thuế : " . $thue;
