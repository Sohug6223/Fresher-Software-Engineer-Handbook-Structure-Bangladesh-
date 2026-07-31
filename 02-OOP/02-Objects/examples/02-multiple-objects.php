<?php

class Student
{
    public $name;

    public function study()
    {
        echo "Student is studying.";
    }
}

// Creating Multiple Objects

$student1 = new Student();
$student2 = new Student();
$student3 = new Student();

echo "Three objects created successfully";