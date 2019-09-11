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
        Truyền tham chiếu và truyền tham trị trong php
        Truyền tham trị đơn giản là truyền giá trị cho tham số
        Truyền tham chiếu có đặc điểm là khi khai báo tham số cho hàm
        trước trên tham số sẽ đặt 1 dấu & trước tên biến
        Và sau khi tham chiếu biến truyền cho tham số
        hiểu đơn giản sẽ tham chiếu đến cùng ô nhớ với tham số
        dẫn tới là khi tham số thay đổi thì biến truyền cho tham số cũng sẽ bị thay đổi

    </pre>

    <?php
        function truyenthamchieu(&$i) {
            $i = $i * 10 ;
            echo "<br> giá trị của biến i ". $i;
        }

        $x = 5;

        truyenthamchieu($x);
        echo "<br> Giá trị của biến x là $x";
    ?>
</body>
</html>