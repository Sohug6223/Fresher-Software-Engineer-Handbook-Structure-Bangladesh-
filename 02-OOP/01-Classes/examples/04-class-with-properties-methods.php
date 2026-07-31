<?php

// Student Class

class Student
{
    public $name;
    public $id;
    public $department;

    public function study()
    {
      echo "Student is studying.";
    }

     public function attendClass()
    {
        echo "Student is attending the class.";
    }
}

// Car Class

class Car
{
    public $brand;
    public $model;
    public $color;

    public function start()
    {
        echo "Car started.";
    }

    public function stop()
    {
        echo "Car stopped.";
    }
}

// Bank Account Class

class BankAccount
{
    public $accountNumber;
    public $accountHolder;
    public $balance;

    public function deposit()
    {
        echo "Money deposited.";
    }

    public function withdraw()
    {
        echo "Money withdrawn.";
    }
}

//Product Class

class Product
{
    public $name;
    public $price;
    public $stock;

    public function addProduct()
    {
        echo "Product added.";
    }

    public function updateStock()
    {
        echo "Stock updated.";
    }
}

//Library Class

class Library
{
    public $bookTitle;
    public $author;
    public $category;

    public function borrowBook()
    {
        echo "Book borrowed.";
    }

    public function returnBook()
    {
        echo "Book returned.";
    }
}