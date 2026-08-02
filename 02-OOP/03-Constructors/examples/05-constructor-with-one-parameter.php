<?php

/* 
 Parameter:
 A parameter is a variable declared inside a function or constructor.
 It receives the value passed when the function or constructor is called.

 Argument:
 An argument is the actual value passed to a function or constructor.

 Example:

 Parameter -> $name
 Argument  -> "Sohug"
*/

echo " Example 1: Student " . PHP_EOL;

class Student
{
    public function __construct($name)
    {
        echo "Student Name: " . $name . PHP_EOL;
    }
}

$student = new Student("Sohug");

echo PHP_EOL;


echo " Example 2: Book " . PHP_EOL;

class Book
{
    public function __construct($title)
    {
        echo "Book Title: " . $title . PHP_EOL;
    }
}

$book = new Book("Clean Code");

echo PHP_EOL;


echo " Example 3: Car " . PHP_EOL;

class Car
{
    public function __construct($brand)
    {
        echo "Car Brand: " . $brand . PHP_EOL;
    }
}

$car = new Car("Toyota");

echo PHP_EOL;

echo " Example 4: Movie " . PHP_EOL;

class Movie
{
    public function __construct($title)
    {
        echo "Movie Title: " . $title . PHP_EOL;
    }
}

$movie = new Movie("Inception");

echo PHP_EOL;

echo " Example 5: Employee " . PHP_EOL;

class Employee
{
    public function __construct($name)
    {
        echo "Employee Name: " . $name . PHP_EOL;
    }
}

$employee = new Employee("Rahim");