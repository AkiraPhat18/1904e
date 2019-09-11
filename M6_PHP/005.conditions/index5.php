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
    Cú pháp thay thế lệnh if else
    Link gốc :
    https://www.php.net/manual/en/control-structures.alternative-syntax.php
</pre>
<?php
    $age = 19;
    if ($age > 18) {
    echo "<br> Người trưởng thành";
    }

    $tuoi = 19;
    if ($tuoi > 18) :
        echo "<br> Người trưởng thành";
    endif;
?>
</body>
</html>