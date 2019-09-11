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

    /**
     * Phương thức
     */
    /**
     * @return int
     */
    public function printInfo()
    {
        echo "<br>".__METHOD__;
        echo "<br>tên :" . $this->name;
        echo "<br>tuổi : " . $this->age;
        echo "<br>quê quán : " . $this->location;
        echo "<br>điểm tổng kết : " . $this->point;
    }
}
// khởi tạo đối tượng từ class
$trang = new Student();
/**
 * muốn in ra cấu trúc của 1 đối tượng
 */
echo "<pre>";
print_r($trang);
echo "</pre>";
//gọi 1 method trong class
$trang->printInfo();

//gọi đến thuộc tính từ bên ngoài class
echo "<br> -----".$trang->name;
echo "<br> -----".$trang->age;
echo "<br> -----".$trang->location;
echo "<br> -----".$trang->point;

