<?php

// We use $this to access the properties and methods of the current object.

class Student
{
  public $name = "Sohug";
  public function showName()
  {
    echo "Student Name: " . $this->name . PHP_EOL;
  }
}

$student = new Student();
$student->showName();