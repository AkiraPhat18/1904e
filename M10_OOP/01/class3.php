<?php
// khai báo class
class Student {
    /**
     * khai báo các thuộc tính
     * của class
     * thuộc tính chỉ tính chất đặc điểm
     * của class đó
     */
    public $name = "đỗ thị trang";
    public $age = 22;
    public $location = "thanh hóa";
    public $point = 8.9;
}
// khởi tạo đối tượng từ class
$trang = new Student();
/**
 * muốn in ra cấu trúc của 1 đối tượng
 */
echo "<pre>";
print_r($trang);
echo "</pre>";
