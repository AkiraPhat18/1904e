<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <pre>
        Thuộc tính action sẽ chứa url mà form post dữ liệu đến
        Nếu action="" thì form post dữ liệu đến chính URL hiện tại
        $_POST để lấy dữ liệu từ form post đi với điều kiện method của form là post
        $_POST sẽ là 1 mảng trong PHP
        Nếu ko có dữ liệu post đi thì $_POST sẽ là mảng rỗng
        Các key trong mảng sẽ là tên của các ô input post dữ liệu đi
        và value trong mảng sẽ là giá trị của các ô input tương ứng
    </pre>

    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    ?>
    
    <div class="container">
        <div class="row">
            <form name="demo" action="" method="post">
                <p>
                    Username : <input name="username" type="text" value="">
                </p>

                <p>
                    Password : <input name="password" type="text" value="">
                </p>

                <p>
                    <input type="submit" name="submit" value="Login">
                </p>
            </form>
        </div>
    </div>
</body>
</html>

