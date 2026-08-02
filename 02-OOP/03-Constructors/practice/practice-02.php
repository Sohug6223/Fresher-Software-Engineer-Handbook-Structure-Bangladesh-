<?php

/*

 Practice 02: Constructor with One Parameter


 Instructions:

 Create the following classes:

 1. Student
 2. Book
 3. Car
 4. Employee
 5. Movie


 Rules:

 - Each class must have a constructor.
 - Each constructor must receive one parameter.
 - Display the received value.
 - Create one object from each class.

 */

 //solution

 class Student{
  public function __construct($name)
  {
    echo "Student Name: " . $name . PHP_EOL;
  }
 }

 $student = new Student("Sohug");
 echo PHP_EOL;


 class Book{
  public function __construct($title)
  {
    echo "Book Title: " . $title . PHP_EOL;
  }
 }

 $book = new Book("Clean Code");
 echo PHP_EOL;


 class Car
{
    public function __construct($brand)
    {
        echo "Car Brand: " . $brand . PHP_EOL;
    }
}

$car = new Car("Toyota");

echo PHP_EOL;



class Employee
{
    public function __construct($name)
    {
        echo "Employee Name: " . $name . PHP_EOL;
    }
}

$employee = new Employee("Rahim");

echo PHP_EOL;


class Movie
{
    public function __construct($title)
    {
        echo "Movie Title: " . $title . PHP_EOL;
    }
}

$movie = new Movie("Inception");