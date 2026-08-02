<?php

/*

 Practice 01: Create Basic Constructors


 Instructions:

 Create the following classes:

 1. Student
 2. Book
 3. Car
 4. Employee
 5. Movie

 Rules:

 - Each class must have a constructor.
 - The constructor should display a simple message.
 - Create one object from each class.

 Expected Output (Example):

 Student object created.
 Book object created.
 Car object created.
 Employee object created.
 Movie object created.


*/


// solution

class Student {
  public function __construct()
  {
    echo "Student object created." .PHP_EOL;
  }
}

$student = new Student();
echo PHP_EOL;


class Book {
  public function __construct()
  {
    echo "Book object created." .PHP_EOL;
  }
}

$book = new Book();
echo PHP_EOL;


class Car {
  public function __construct()
  {
    echo "Car object created." .PHP_EOL;
  }
}

$car = new Car();
echo PHP_EOL;


class Employee {
  public function __construct()
  {
    echo "Employee object created." .PHP_EOL;
  }
}

$employee = new Employee();
echo PHP_EOL;


class Movie{
  public function __construct()
  {
    echo "Movie object created." .PHP_EOL;
  }
}

$movie = new Movie();
echo PHP_EOL;
