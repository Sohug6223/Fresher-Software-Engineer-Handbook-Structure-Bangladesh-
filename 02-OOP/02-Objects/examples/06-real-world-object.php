<?php

// Example 1: Customer

class Customer
{
    public $name;
    public $email;

    public function placeOrder()
    {
        echo "Order placed successfully." . PHP_EOL;
    }
}

$customer = new Customer();

$customer->name = "Sohug";
$customer->email = "sohug@example.com";

echo "Customer" . PHP_EOL;
echo "Name: " . $customer->name . PHP_EOL;
echo "Email: " . $customer->email . PHP_EOL;

$customer->placeOrder();

echo PHP_EOL;


// Example 2: Employee

class Employee
{
    public $name;
    public $designation;

    public function work()
    {
        echo "Employee is working." . PHP_EOL;
    }
}

$employee = new Employee();

$employee->name = "Rahim";
$employee->designation = "Software Engineer";

echo "Employee" . PHP_EOL;
echo "Name: " . $employee->name . PHP_EOL;
echo "Designation: " . $employee->designation . PHP_EOL;

$employee->work();

echo PHP_EOL;


// Example 3: Book

class Book
{
    public $title;
    public $author;

    public function read()
    {
        echo "Reading the book..." . PHP_EOL;
    }
}

$book = new Book();

$book->title = "Clean Code";
$book->author = "Robert C. Martin";

echo "Book" . PHP_EOL;
echo "Title: " . $book->title . PHP_EOL;
echo "Author: " . $book->author . PHP_EOL;

$book->read();

echo PHP_EOL;


// Example 4: Hotel

class Hotel
{
    public $name;
    public $location;

    public function bookRoom()
    {
        echo "Room booked successfully." . PHP_EOL;
    }
}

$hotel = new Hotel();

$hotel->name = "Sea View Resort";
$hotel->location = "Cox's Bazar";

echo "Hotel" . PHP_EOL;
echo "Name: " . $hotel->name . PHP_EOL;
echo "Location: " . $hotel->location . PHP_EOL;

$hotel->bookRoom();

echo PHP_EOL;


// Example 5: Mobile Phone

class MobilePhone
{
    public $brand;
    public $model;

    public function makeCall()
    {
        echo "Calling..." . PHP_EOL;
    }
}

$phone = new MobilePhone();

$phone->brand = "Samsung";
$phone->model = "Galaxy S25";

echo "Mobile Phone" . PHP_EOL;
echo "Brand: " . $phone->brand . PHP_EOL;
echo "Model: " . $phone->model . PHP_EOL;

$phone->makeCall();