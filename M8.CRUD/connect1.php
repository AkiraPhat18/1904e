<?php
$servername = "localhost";
$username = "root1";
$password = "";

$conn = new mysqli($servername, $username ,$password);

if($conn->connect_error){
    die("ko thể kết nối đến database");
}

echo "kết nối đến CSDL thành công";
