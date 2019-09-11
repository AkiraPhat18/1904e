<?php
    $ten = "bùi thị quyên ";
    $tuoi = 22;
    $quequan = "xuân trường";
    echo "<br> tên là : " . $ten;
    echo "<br> tuổi là : " . $tuoi;
    echo "<br> quê hương là : " . $quequan;
    /*Nếu trong "" mà in ra tên của biến
    thì php sẽ hiểu trong nháy kép đó là biến
    Nếu trong '' mà in ra tên của biến
    thì php sẽ hiểu trong nháy đơn đó đơn thuẩn chỉ là 1 chuỗi bình thường*/
    echo "<br> $ten : $ten";
    echo '<br> $ten : $ten';
?>

