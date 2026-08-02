<?php

class Student
{
  public function __construct()
  {
    echo "Student object has been created." .  PHP_EOL;
  }
}

echo "Creating the first object..." . PHP_EOL;

$student1 = new Student(); // Creates an object and automatically calls the constructor.

echo PHP_EOL;

echo "Creating the second object..." .PHP_EOL;

$student2 = new Student(); // Creates another object and automatically calls the constructor.