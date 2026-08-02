<?php

echo " Example 1: Student " . PHP_EOL;

class Student
{
    public function __construct($name)
    {
        echo "Student Name: " . $name . PHP_EOL;
    }
}

$student1 = new Student("Sohug");
$student2 = new Student("Rahim");
$student3 = new Student("Karim");

echo PHP_EOL;


echo " Example 2: Book " . PHP_EOL;

class Book
{
    public function __construct($title)
    {
        echo "Book Title: " . $title . PHP_EOL;
    }
}

$book1 = new Book("Clean Code");
$book2 = new Book("The Pragmatic Programmer");

echo PHP_EOL;


echo " Example 3: Car " . PHP_EOL;

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


echo " Example 4: Employee " . PHP_EOL;

class Employee
{
    public function __construct($name)
    {
        echo "Employee Name: " . $name . PHP_EOL;
    }
}

$employee1 = new Employee("Rahim");
$employee2 = new Employee("Karim");

echo PHP_EOL;


echo " Example 5: Movie " . PHP_EOL;

class Movie
{
    public function __construct($title)
    {
        echo "Movie Title: " . $title . PHP_EOL;
    }
}

$movie1 = new Movie("Inception");
$movie2 = new Movie("Interstellar");