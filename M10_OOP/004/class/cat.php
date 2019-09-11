<?php

include_once "../abstract/animals.php";

class Meo extends Dongvat {
    public function tenloai()
    {
        echo "This a cat ";
    }

    public function thongtin()
    {
        echo "tôi là mèo có 4 chân hay nằm góc bếp";
    }
}