<?php

/*

 Practice 05: Default Parameter Values


 Instructions:

 Create the following classes:

 1. Student
 2. Book
 3. Employee
 4. Product
 5. Car


 Rules:

 - Each class must have a constructor.
 - Each constructor must have one parameter with a default value.
 - Create one object without passing an argument.
 - Create another object by passing an argument.
 - Display the received value.

*/


//solution

class Student
{
  public function __construct($department = "CSE")
  {
   echo "Department: ". $department . PHP_EOL;
  }
}

$student1 = new Student();
$student2 = new Student("EEE");

echo PHP_EOL;


class Book
{
    public function __construct($category = "Programming")
    {
        echo "Category: " . $category . PHP_EOL;
    }
}

$book1 = new Book();
$book2 = new Book("Database");

echo PHP_EOL;


class Employee
{
    public function __construct($designation = "Intern")
    {
        echo "Designation: " . $designation . PHP_EOL;
    }
}

$employee1 = new Employee();
$employee2 = new Employee("Software Engineer");

echo PHP_EOL;


class Product
{
    public function __construct($currency = "BDT")
    {
        echo "Currency: " . $currency . PHP_EOL;
    }
}

$product1 = new Product();
$product2 = new Product("USD");

echo PHP_EOL;


class Car
{
    public function __construct($color = "White")
    {
        echo "Color: " . $color . PHP_EOL;
    }
}

$car1 = new Car();
$car2 = new Car("Black");