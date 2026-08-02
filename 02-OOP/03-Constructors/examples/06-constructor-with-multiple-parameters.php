<?php

echo " Example 1: Student " . PHP_EOL;

class Student
{
    public function __construct($name, $department)
    {
        echo "Student Name: " . $name . PHP_EOL;
        echo "Department: " . $department . PHP_EOL;
    }
}

$student = new Student("Sohug", "CSE");

echo PHP_EOL;

echo " Example 2: Book " . PHP_EOL;

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

echo " Example 3: Product " . PHP_EOL;

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

echo " Example 4: Employee " . PHP_EOL;

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

echo " Example 5: Car " . PHP_EOL;

class Car
{
    public function __construct($brand, $model)
    {
        echo "Brand: " . $brand . PHP_EOL;
        echo "Model: " . $model . PHP_EOL;
    }
}

$car = new Car("Toyota", "Corolla");