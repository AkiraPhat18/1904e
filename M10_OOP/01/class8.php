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

    //phương thức khởi tạo
    public function changeInfo($name_param, $age_param)
    {
        echo "<br>". __METHOD__;
        $this->name = $name_param;
        $this->age = $age_param;
    }


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

//khởi tạo đối tượng từ class
$trang = new Student();
$trang->changeInfo("bùi thị quyên",21);

echo "<pre>";
print_r($trang);
echo "</pre>";

