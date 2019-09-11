<?php
//kiểu đối tượng object
    class Student
    {
        public $name;

        public $age;

        public $location;

        public function setInfo($name, $age, $location)
        {
            $this->name = $name;
            $this->age = $age;
            $this->location = $location;
        }
    }
    $st = new Student();

    var_dump($st);

    echo "<pre>";
    print_r($st);
    echo "</pre>";



