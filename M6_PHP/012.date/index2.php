<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <pre>
        Cú pháp :
        mktime(hour,minute,second,month,day,year)
        Hàm này sẽ tạo ra thời gian ở dạng linux timestamp

        => Để chuyển thời gian dạng linux về dạng time đọc được thì sẽ
        sử dụng date("định dạng time", "thời gian linux");
    </pre>
    <?php
        $time1 = strtotime("hour 8,minute 12, second 00,month 11,day 19,year 1997");
        echo "<br> time1 :". $time1;
        $human_time = date("Y-m-d H:i:s",$time1);
        echo "<br> Chuyển thời gian linux về thời gian đọc được " . $human_time;
    /**
     * Hàm strtotime(time,now)
     * Chuyển thời gian linux thời gian đọc được về linux
     */
    echo "<br> Chuyển thời gian  đọc được  về linux " . strtotime($human_time);
    ?>
</body>
</html>