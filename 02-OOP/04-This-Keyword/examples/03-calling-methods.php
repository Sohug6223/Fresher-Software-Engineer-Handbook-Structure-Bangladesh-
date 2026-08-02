<?php

class Student
{
  public function showName()
  {
    echo "Student Name: Sohug" . PHP_EOL;
  }

  public function showDepartment()
  {
    echo "Department: CSE" . PHP_EOL;
  }

  public function showInfo()
  {
    $this->showName();
    $this->showDepartment();
  }
}

$student = new Student();

$student->showInfo();