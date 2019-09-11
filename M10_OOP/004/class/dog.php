<?php

include_once "../abstract/animals.php";
include_once "../interface/an.php";
include_once "../interface/keu.php";
include_once "../interface/sinhsan.php";
/**
 * Class Cho
 * bất kể class nào khi extend từ abstract class
 * thì phải viết lại code thực thi cho các method
 * abstract của class cha
 *
 *  abstract class : lớp trừ tượng
 * extends : kế thừa
 * interface : giao diện
 * implements : thực thi
 * method : phương thức
 */
class Cho extends Dongvat implements An,Keu,Sinhsan {
    public function tenloai()
    {
        echo "This is a dog ";
    }

    public function thongtin()
    {
        echo "chó là loài 4 chân chạy nhanh. chó được nuôi làm thú cưng và trông nhà";
    }

    public function toinayangi(){

    }

    public function keunhuthenao()
    {
        // TODO: Implement keunhuthenao() method.
    }

    public function sinhsannhuthenao()
    {
        // TODO: Implement sinhsannhuthenao() method.
    }
}