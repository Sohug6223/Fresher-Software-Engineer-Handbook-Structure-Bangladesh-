<?php

// Student Class

class Student
{
    public $name;
    public $id;
    public $department;
    public $cgpa;

    public function study()
    {
        echo "Student is studying.";
    }

    public function attendClass()
    {
        echo "Student is attending the class.";
    }

    public function submitAssignment()
    {
        echo "Assignment submitted successfully.";
    }

    public function takeExam()
    {
        echo "Student is taking the exam.";
    }

    public function viewResult()
    {
        echo "Showing examination result.";
    }
}


// Product Class

class Product
{
    public $name;
    public $price;
    public $stock;
    public $category;

    public function addProduct()
    {
        echo "Product added successfully.";
    }

    public function updateProduct()
    {
        echo "Product updated successfully.";
    }

    public function updateStock()
    {
        echo "Stock updated.";
    }

    public function applyDiscount()
    {
        echo "Discount applied.";
    }

    public function deleteProduct()
    {
        echo "Product deleted successfully.";
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

    public function transferMoney()
    {
        echo "Money transferred.";
    }

    public function checkBalance()
    {
        echo "Showing account balance.";
    }
}

// Employee Class


class Employee
{
    public $name;
    public $employeeId;
    public $designation;
    public $salary;

    public function work()
    {
        echo "Employee is working.";
    }

    public function attendMeeting()
    {
        echo "Employee is attending a meeting.";
    }

    public function applyLeave()
    {
        echo "Leave request submitted.";
    }

    public function calculateSalary()
    {
        echo "Salary calculated.";
    }
}
// Library Class


class Library
{
    public $bookTitle;
    public $author;
    public $category;

    public function issueBook()
    {
        echo "Book issued successfully.";
    }

    public function returnBook()
    {
        echo "Book returned successfully.";
    }

    public function searchBook()
    {
        echo "Searching for a book.";
    }

    public function reserveBook()
    {
        echo "Book reserved successfully.";
    }
}

/*

| Class       | Properties (Data)      | Methods (Behavior)          |
| ----------- | ---------------------- | --------------------------- |
| Student     | name, id, department   | study(), takeExam()         |
| Product     | name, price, stock     | addProduct(), updateStock() |
| BankAccount | accountNumber, balance | deposit(), withdraw()       |
| Employee    | name, designation      | work(), applyLeave()        |
| Library     | bookTitle, author      | issueBook(), returnBook()   |


*/