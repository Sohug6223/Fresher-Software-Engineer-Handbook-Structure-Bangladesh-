<?php

class Student
{
  public function __construct($name)
  {
     echo "Welcome, " . $name . "!" . PHP_EOL;
  }
}

echo "Creating the first object..." . PHP_EOL;

$student1 = new Student("Sohug");

echo PHP_EOL;

echo "Creating the second object..." . PHP_EOL;

$student2 = new Student("Sajib");

echo PHP_EOL;

echo "Creating the third object..." . PHP_EOL;

$student3 = new Student("Karim");