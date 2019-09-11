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
    <?php
        function truyenthamtri($i) {
            $i = $i * 10;
            echo "<br> giá trị của biến i " . $i;
        }

        $x = 5;

        truyenthamtri($x);
        echo "<br>giá trị của biến x là $x";
    ?>
</body>
</html>
