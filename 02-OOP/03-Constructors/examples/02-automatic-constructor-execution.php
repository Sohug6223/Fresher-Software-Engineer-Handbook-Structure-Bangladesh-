<?php

class Student
{
  public function __construct()
  {
    echo "Constructor executed." . PHP_EOL;
  }
}

echo "Program started." . PHP_EOL;

echo PHP_EOL;

echo "Creating Student object..." . PHP_EOL;

$student = new Student();

echo PHP_EOL;

echo "Object created successfully." . PHP_EOL;

echo PHP_EOL;

echo "Program finished." . PHP_EOL;