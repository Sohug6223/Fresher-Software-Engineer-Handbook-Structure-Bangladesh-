<?php

class Student
{
  public $name;
  public $department;
  public $studentId;

  public function __construct($name, $department, $studentId)
  {
    $this->name = $name;
    $this->department = $department;
    $this->studentId = $studentId;
  }
  public function register()
{
  echo "       Student Registration       " .PHP_EOL;

  echo PHP_EOL;

  echo "Student Name  : " . $this->name . PHP_EOL;
  echo "Department    : " . $this->department . PHP_EOL;
  echo "Student ID    : " . $this->studentId  . PHP_EOL;

  echo "Registration Completed Successfully!" . PHP_EOL;
  }

}


  $student1 = new Student("Sohug", "CSE", 1147);
  $student2 = new Student("Rahim", "EEE", "2330");

  $student1->register();
  echo PHP_EOL;
  $student2->register();