<?php

/*

 Practice 04: Multiple Objects with Constructor


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
 - Create at least three objects from each class.
 - Pass different arguments to each object.
 - Display the received values.


*/

//solution

class Student
{
  public function __construct($name)
  {
   echo "Student Name: " . $name . PHP_EOL;
  }
}

$student1 = new Student("Sohug");
$student2 = new Student("Sajib");
$student3 = new Student("Rahim");

echo PHP_EOL;


class Book
{
    public function __construct($title)
    {
        echo "Book Title: " . $title . PHP_EOL;
    }
}

$book1 = new Book("Clean Code");
$book2 = new Book("The Pragmatic Programmer");
$book3 = new Book("Design Patterns");

echo PHP_EOL;

class Car
{
    public function __construct($brand)
    {
        echo "Car Brand: " . $brand . PHP_EOL;
    }
}

$car1 = new Car("Toyota");
$car2 = new Car("Honda");
$car3 = new Car("BMW");

echo PHP_EOL;


class Employee
{
    public function __construct($name)
    {
        echo "Employee Name: " . $name . PHP_EOL;
    }
}

$employee1 = new Employee("Rahim");
$employee2 = new Employee("Karim");
$employee3 = new Employee("Hasib");

echo PHP_EOL;


class Movie
{
    public function __construct($title)
    {
        echo "Movie Title: " . $title . PHP_EOL;
    }
}

$movie1 = new Movie("Inception");
$movie2 = new Movie("Interstellar");
$movie3 = new Movie("The Dark Knight");