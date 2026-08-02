<?php

/*

 Practice 03: Constructor with Multiple Parameters


 Instructions:

 Create the following classes:

 1. Student
 2. Book
 3. Product
 4. Employee
 5. Car


 Rules:

 - Each class must have a constructor.
 - Each constructor must receive two parameters.
 - Display all received values.
 - Create one object from each class.

 */

 //soution

 class Student{
  public function __construct($name, $department)
  {
    echo "Student Name: " . $name . PHP_EOL;
    echo "Department: " . $department . PHP_EOL;
  }
 }

 $student = new Student("Sohug", "CSE");
 echo PHP_EOL;


class Book
{
    public function __construct($title, $author)
    {
        echo "Book Title: " . $title . PHP_EOL;
        echo "Author: " . $author . PHP_EOL;
    }
}

$book = new Book("Clean Code", "Robert C. Martin");

echo PHP_EOL;



class Product
{
    public function __construct($name, $price)
    {
        echo "Product Name: " . $name . PHP_EOL;
        echo "Price: " . $price . " BDT" . PHP_EOL;
    }
}

$product = new Product("Keyboard", 2500);

echo PHP_EOL;

class Employee
{
    public function __construct($name, $designation)
    {
        echo "Employee Name: " . $name . PHP_EOL;
        echo "Designation: " . $designation . PHP_EOL;
    }
}

$employee = new Employee("Rahim", "Software Engineer");

echo PHP_EOL;


class Car
{
    public function __construct($brand, $model)
    {
        echo "Car Brand: " . $brand . PHP_EOL;
        echo "Model: " . $model . PHP_EOL;
    }
}

$car = new Car("Toyota", "Corolla");