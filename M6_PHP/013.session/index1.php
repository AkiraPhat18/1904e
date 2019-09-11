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

    <h1>Session trong PHP</h1>
    <pre>
        Session trong PHP là cách để lưu trữ thông tin trong biến đồng bộ trên nhiều trang của website.
        Ví dụ :
        Khi tạo ra 1 session đăng nhập session này sẽ làm việc trên trang chủ ( home.php )
        trang tin tức ( new.php ) trang danh mục ( category.php ) ...
        Session thường được sử dụng để lưu trữ thông tin đăng nhập , data giỏ hàng của khách hàng
        trên các trang mua sắm ...
        Để bắt đầu sử dụng session chúng ta cần có hàm session_start() ở đầu trang web
        hàm này sẽ khởi đầu session trong php
        Biến session được đặt trong 1 biến global của php là $_SESSION
    </pre>
</body>
</html>
