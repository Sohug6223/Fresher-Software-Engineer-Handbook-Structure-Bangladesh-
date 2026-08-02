<?php

class Student
{
  public function __construct()
  {
    echo "Constructor executed." . PHP_EOL;
  }

  public function study()
    {
        echo "Student is studying." . PHP_EOL;
    }
}

echo "Creating Student object..." . PHP_EOL;

$student = new Student();

echo PHP_EOL;

echo "Calling study() method..." . PHP_EOL;

$student->study();

echo PHP_EOL;

echo "Creating another object..." . PHP_EOL;

$student2 = new Student();