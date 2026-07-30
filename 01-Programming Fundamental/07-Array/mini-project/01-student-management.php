<?php

/*

Mini Project 01 - Student Management System

Features

- Add Student
- View All Students
- Search Student
- Count Total Students
- Exit

*/

define("PROJECT_TITLE", "STUDENT MANAGEMENT SYSTEM");

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;

// Students Array

$students = [

    [
        "Name" => "Sohug",
        "Department" => "CSE",
        "CGPA" => 3.90
    ],

    [
        "Name" => "Rahim",
        "Department" => "EEE",
        "CGPA" => 3.75
    ],

    [
        "Name" => "Karim",
        "Department" => "BBA",
        "CGPA" => 3.60
    ]

];

// Main Program

$choice = 0;

do {

    echo PHP_EOL;
    echo "1. Add Student" . PHP_EOL;
    echo "2. View All Students" . PHP_EOL;
    echo "3. Search Student" . PHP_EOL;
    echo "4. Count Total Students" . PHP_EOL;
    echo "5. Exit" . PHP_EOL;

    echo PHP_EOL;

    $choice = (int) readline("Enter Your Choice: ");

    echo PHP_EOL;

    switch ($choice) {

        case 1:
            addStudent($students);
            break;

        case 2:
            viewStudents($students);
            break;

        case 3:
            searchStudent($students);
            break;

        case 4:
            countStudents($students);
            break;

        case 5:
            echo "Thank you for using " . PROJECT_TITLE . "." . PHP_EOL;
            break;

        default:
            echo "Invalid Choice! Please try again." . PHP_EOL;
    }

} while ($choice != 5);

// Functions

function addStudent(&$students)
{
    echo "ADD STUDENT" . PHP_EOL;
    echo PHP_EOL;

    $name = trim(readline("Enter Name       : "));
    $department = trim(readline("Enter Department : "));
    $cgpa = (float) readline("Enter CGPA       : ");

    if ($name == "") {

        echo PHP_EOL;
        echo "Student Name cannot be empty." . PHP_EOL;

        return;
    }

    array_push($students, [

        "Name" => $name,
        "Department" => $department,
        "CGPA" => $cgpa

    ]);

    echo PHP_EOL;
    echo "Student Added Successfully." . PHP_EOL;
}

function viewStudents($students)
{
    if (count($students) == 0) {

        echo "No Students Found." . PHP_EOL;

        return;
    }

    echo "STUDENT LIST" . PHP_EOL;
    echo PHP_EOL;

    foreach ($students as $index => $student) {

        echo "Student " . ($index + 1) . PHP_EOL;
        echo "Name       : " . $student["Name"] . PHP_EOL;
        echo "Department : " . $student["Department"] . PHP_EOL;
        echo "CGPA       : " . $student["CGPA"] . PHP_EOL;

        echo PHP_EOL;
    }
}

function searchStudent($students)
{
    $search = trim(readline("Enter Student Name: "));

    $found = false;

    foreach ($students as $student) {

        if (strcasecmp($student["Name"], $search) == 0) {

            echo PHP_EOL;
            echo "Student Found Successfully." . PHP_EOL;
            echo PHP_EOL;

            echo "Name       : " . $student["Name"] . PHP_EOL;
            echo "Department : " . $student["Department"] . PHP_EOL;
            echo "CGPA       : " . $student["CGPA"] . PHP_EOL;

            $found = true;

            break;
        }
    }

    if (!$found) {

        echo PHP_EOL;
        echo "Student Not Found." . PHP_EOL;
    }
}

function countStudents($students)
{
    echo "Total Students: " . count($students) . PHP_EOL;
}