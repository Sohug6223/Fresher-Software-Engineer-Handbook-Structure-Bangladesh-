<?php


// Example 1: Student


class Student
{
    public $name;
    public $department;
}

// creating an Object

$student = new Student();

//Assigning Values to Properties

$student->name = "Sohug";
$student->department = "Computer Science and Engineering";

//Accessing Properties

echo "Student" . PHP_EOL;
echo "Name: " . $student->name . PHP_EOL;
echo "Department: " . $student->department . PHP_EOL;

echo PHP_EOL;



// Example 2: Teacher

class Teacher
{
    public $name;
    public $subject;
}

$teacher = new Teacher();

$teacher->name = "Rahim";
$teacher->subject = "Mathematics";

echo "Teacher" . PHP_EOL;
echo "Name: " . $teacher->name . PHP_EOL;
echo "Subject: " . $teacher->subject . PHP_EOL;

echo PHP_EOL;


// Example 3: Laptop

class Laptop
{
    public $brand;
    public $ram;
}

$laptop = new Laptop();

$laptop->brand = "Dell";
$laptop->ram = "16 GB";

echo "Laptop" . PHP_EOL;
echo "Brand: " . $laptop->brand . PHP_EOL;
echo "RAM: " . $laptop->ram . PHP_EOL;

echo PHP_EOL;

// Example 4: Employee


class Employee
{
    public $name;
    public $designation;
}

$employee = new Employee();

$employee->name = "Karim";
$employee->designation = "Software Engineer";

echo "Employee" . PHP_EOL;
echo "Name: " . $employee->name . PHP_EOL;
echo "Designation: " . $employee->designation . PHP_EOL;

echo PHP_EOL;

// Example 5: Book

class Book
{
    public $title;
    public $author;
}

$book = new Book();

$book->title = "Clean Code";
$book->author = "Robert C. Martin";

echo "Book" . PHP_EOL;
echo "Title: " . $book->title . PHP_EOL;
echo "Author: " . $book->author . PHP_EOL;