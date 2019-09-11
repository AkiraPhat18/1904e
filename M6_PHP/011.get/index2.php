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
        /**
         * URL sau khi post data đi : index2.php?email=sdfsdf&username=sdfsdfsdf&submit=submit
         */
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        if (isset($_GET["email"])){
            echo "<br>". $_GET["email"];
        }
        if (isset($_GET["username"])){
            echo "<br>". $_GET["username"];
        }
    ?>

    <form action="demo" action="" method="get">
        <input name="email" value="" type="text" placeholder="email">

        <br>

        <input name="username" value="" type="text" placeholder="username">

        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
