<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";

$conn = new mysqli($servername, $username ,$password , $dbname);

if($conn->connect_error){
    die("ko thể kết nối đến database");
}

echo "kết nối đến CSDL thành công";
