<?php

/*

 Practice 06: Constructor Challenge


 Instructions:

 Create the following classes:

 1. Student
 2. Laptop
 3. Hospital
 4. Course
 5. Restaurant


 Requirements:

 Student:
 - Constructor with one parameter.
 - Create 3 objects.

 Laptop:
 - Constructor with two parameters.
 - Create 2 objects.

 Hospital:
 - Constructor with one default parameter.
 - Create 2 objects.
 - One object should use the default value.

 Course:
 - Constructor with three parameters.
 - Create 2 objects.

 Restaurant:
 - Constructor with two parameters.
 - Create 3 objects.


 Display all received values using echo.


*/


// Solution

class Student
{
  public function __construct($name)
  {
    echo "Student Name: $name" . PHP_EOL;
  }
}

$student1 = new Student("Sohug");
$student2 = new Student("Sajib");
$student3 = new Student("Karim");

echo PHP_EOL;


class Laptop
{
    public function __construct($brand, $processor)
    {
        echo "Brand: $brand" . PHP_EOL;
        echo "Processor: $processor" . PHP_EOL;
    }
}

$laptop1 = new Laptop("Dell", "Intel Core i5");
$laptop2 = new Laptop("HP", "AMD Ryzen 7");

echo PHP_EOL;


class Hospital
{
    public function __construct($name = "General Hospital")
    {
        echo "Hospital: $name" . PHP_EOL;
    }
}

$hospital1 = new Hospital();
$hospital2 = new Hospital("City Hospital");

echo PHP_EOL;


class Course
{
    public function __construct($name,  $duration, $trainer)
    {
        echo "Course: $name, Duration: $duration Months, Trainer: $trainer" . PHP_EOL;
    }
}

$course1 = new Course("PHP", 6, "Mr. Hasan");
$course2 = new Course("Laravel", 4, "Mr. Rahman");

echo PHP_EOL;


class Restaurant
{
    public function __construct($name, $location)
    {
        echo "Restaurant: $name, Location: $location" . PHP_EOL;
    }
}

$restaurant1 = new Restaurant("Kacchi Bhai", "Dhaka");
$restaurant2 = new Restaurant("Sultan's Dine", "Chattogram");
$restaurant3 = new Restaurant("Tasty Treat", "Konabari");