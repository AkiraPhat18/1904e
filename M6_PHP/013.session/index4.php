<?php
//bắt buộc phải khởi tạo session
session_start();
?>
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

    <h1>Khởi tạo session</h1>


    <?php
        //$_SESSION là 1 mảng
        $_SESSION["user_name"] = "admin";
        $_SESSION["user_email"] = "admin@gmail.com";

        $location = "hà nội";

        $_SESSION["user_location"] = $location;

        //Xem tất cả session đang hoạt động
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>

    <div>
        <?php
            if (isset($_SESSION["user_name"])):
                ?>
                <p>user_name là : <?php echo  $_SESSION["user_name"]?></p>
            <?php endif; ?>

            <?php if (isset($_SESSION["user_email"])): ?>
            <p>user_email là : <?php echo $_SESSION["user_email"] ?></p>
            <?php endif; ?>

            <?php if (isset($_SESSION["user_location"])):?>
                <p>user_location là : <?php echo $_SESSION["user_location"]?></p>
            <?php endif; ?>
    </div>
</body>
</html>
