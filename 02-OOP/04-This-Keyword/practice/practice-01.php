<?php

/*
Access Object Properties Using $this

Instructions:

 Create the following classes:

 1. Student
 2. Book
 3. Car
 4. Employee
 5. Movie


 Rules:

 - Each class must have at least one property.
 - Assign a value to the property inside the constructor.
 - Use $this to access the property.
 - Create one object from each class.
 - Display the property value.

*/


// Solution

class Student
{
  public $name;

  public function __construct($name)
  {
   $this->name = $name;
   echo "Student Name: ". $this->name . PHP_EOL;
  }
}

$student = new Student("Sohug");

echo PHP_EOL;


class Book
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;

        echo "Book Title: " . $this->title . PHP_EOL;
    }
}

$book = new Book("Clean Code");

echo PHP_EOL;


class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;

        echo "Car Brand: " . $this->brand . PHP_EOL;
    }
}

$car = new Car("Toyota");

echo PHP_EOL;


class Employee
{
    public $employeeName;

    public function __construct($employeeName)
    {
        $this->employeeName = $employeeName;

        echo "Employee Name: " . $this->employeeName . PHP_EOL;
    }
}

$employee = new Employee("Rahim");

echo PHP_EOL;


class Movie
{
    public $movieName;

    public function __construct($movieName)
    {
        $this->movieName = $movieName;

        echo "Movie Name: " . $this->movieName . PHP_EOL;
    }
}

$movie = new Movie("Inception");