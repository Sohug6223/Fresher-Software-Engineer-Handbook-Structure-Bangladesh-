<?php

/* 
Constructor parameters are local variables.

 To store their values inside the object,
 we use $this.

 $this->property = $parameter;
*/
class Student
{
  public $name;
  public $department;

  public function __construct($name, $department)
  {
    $this->name = $name;
    $this->department = $department;

    echo "Student Name: " . $this->name . PHP_EOL;
    echo "Department: " . $this->department . PHP_EOL;
  }
}

$student = new Student("Sohug" , "CSE");