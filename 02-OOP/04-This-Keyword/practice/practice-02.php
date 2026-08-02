<?php

/*

Store Multiple Values Using $this

Instructions:

 Create the following classes:

 1. Student
 2. Book
 3. Car
 4. Employee
 5. Movie


 Rules:

 - Each class must have at least two properties.
 - Assign values to the properties inside the constructor.
 - Use $this to store the values.
 - Display all property values.
 - Create one object from each class.

*/


// Solution

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
$student = new Student("Sohug", "CSE");
echo PHP_EOL;

class  Book
{
 public $title;
 public $author;

 public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;

        echo "Book Title: " . $this->title . PHP_EOL;
        echo "Author: " . $this->author . PHP_EOL;
    } 
}

$book = new Book("Clean Code", "Robert C. Martin");

echo PHP_EOL;

class Car
{
    public $brand;
    public $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;

        echo "Car Brand: " . $this->brand . PHP_EOL;
        echo "Model: " . $this->model . PHP_EOL;
    }
}

$car = new Car("Toyota", "Corolla");

echo PHP_EOL;

class Employee
{
    public $name;
    public $designation;

    public function __construct($name, $designation)
    {
        $this->name = $name;
        $this->designation = $designation;

        echo "Employee Name: " . $this->name . PHP_EOL;
        echo "Designation: " . $this->designation . PHP_EOL;
    }
}

$employee = new Employee("Rahim", "Software Engineer");

echo PHP_EOL;

class Movie
{
    public $title;
    public $director;

    public function __construct($title, $director)
    {
        $this->title = $title;
        $this->director = $director;

        echo "Movie Title: " . $this->title . PHP_EOL;
        echo "Director: " . $this->director . PHP_EOL;
    }
}

$movie = new Movie("Inception", "Christopher Nolan");