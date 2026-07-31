<?php


// A Method is a function declared inside a class.

// Student Class

class Student
{
    public function study() // here study() is a method
    {
        echo "Student is studying.";
    }

    public function attendClass()
    {
        echo "Student is attending the class.";
    }

    public function takeExam()
    {
        echo "Student is taking the exam.";
    }
}

 // Car Class

class Car
{
    public function start()
    {
        echo "Car started.";
    }

    public function stop()
    {
        echo "Car stopped.";
    }

    public function accelerate()
    {
        echo "Car is accelerating.";
    }

    public function brake()
    {
        echo "Car is slowing down.";
    }
}


// Bank Account Class


class BankAccount
{
    public function deposit()
    {
        echo "Money deposited successfully.";
    }

    public function withdraw()
    {
        echo "Money withdrawn successfully.";
    }

    public function checkBalance()
    {
        echo "Showing account balance.";
    }
}


// Example 4: Product Class


class Product
{
    public function addProduct()
    {
        echo "Product added successfully.";
    }

    public function updateProduct()
    {
        echo "Product updated successfully.";
    }

    public function deleteProduct()
    {
        echo "Product deleted successfully.";
    }
}

// Example 5: Library Class


class Library
{
    public function borrowBook()
    {
        echo "Book borrowed successfully.";
    }

    public function returnBook()
    {
        echo "Book returned successfully.";
    }

    public function searchBook()
    {
        echo "Searching for a book.";
    }
}