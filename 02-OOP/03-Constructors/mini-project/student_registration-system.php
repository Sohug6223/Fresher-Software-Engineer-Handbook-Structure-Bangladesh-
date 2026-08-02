<?php

/*

Create a simple Student Registration System using constructors.

 Requirements:

 - Create a Student class.
 - The constructor should receive:
    1. Student Name
    2. Department
    3. Student ID
 - Display the received information.
 - Create at least three student objects.

*/


class Student
{
    public function __construct($name, $department, $studentId)
    {
        echo PHP_EOL;
        echo "      Student Registration" . PHP_EOL;
        echo PHP_EOL;

        echo "Student Name : " . $name . PHP_EOL;
        echo "Department   : " . $department . PHP_EOL;
        echo "Student ID   : " . $studentId . PHP_EOL;

        echo "Registration Completed Successfully!" . PHP_EOL;
        echo PHP_EOL;
    }
}


$student1 = new Student("Sohug", "CSE", "CSE-230101");

echo PHP_EOL;

$student2 = new Student("Rahim", "EEE", "EEE-230205");

echo PHP_EOL;

$student3 = new Student("Karim", "BBA", "BBA-230315");