<?php

/*

Practice 01 - Basic Arrays

Task 1

Create an indexed array containing five fruits.

Print all fruits.

Task 2

Create an indexed array
containing five programming languages.

Print the first and last language.


Task 3

Create an associative array for a student.

Keys:

Name
Department
University
CGPA

Print each value separately.


Task 4

Create an associative array for a product.

Keys:

Name
Brand
Price

Print all information.


Task 5

Create a multidimensional array containing three students.

Each student should have:

Name
Department
CGPA

Print the first student's information.


Task 6

Print the department of the second student.


Task 7

Print the CGPA of the third student.


Task 8

Count the total number of fruits.

Hint:

count()


Task 9

Check whether "Mango" exists in the fruits array.

Hint:

in_array()


Task 10

Print all fruits using foreach.


Task 11

Print all student information using foreach.

Task 12

Print all keys of the associative array
using foreach.

Example

Name
Department
University
CGPA


Task 13

Print all values of the associative array
using foreach.


Task 14

Print the total number of students.

Hint:

count()

*/

// Solution

// Task 1

$fruits = [
    "Apple",
    "Mango",
    "Banana",
    "Orange",
    "Pineapple"
];

echo "Task 1" . PHP_EOL;

print_r($fruits);

echo PHP_EOL;

// Task 2

$languages = [
    "PHP",
    "JavaScript",
    "Python",
    "Java",
    "C++"
];

echo "Task 2" . PHP_EOL;

echo "First Language: " . $languages[0] . PHP_EOL;
echo "Last Language: " . $languages[4] . PHP_EOL;

echo PHP_EOL;

// Task 3

$student = [
    "Name" => "Sohug",
    "Department" => "CSE",
    "University" => "City University",
    "CGPA" => 3.80
];

echo "Task 3" . PHP_EOL;

echo "Name: " . $student["Name"] . PHP_EOL;
echo "Department: " . $student["Department"] . PHP_EOL;
echo "University: " . $student["University"] . PHP_EOL;
echo "CGPA: " . $student["CGPA"] . PHP_EOL;

echo PHP_EOL;

// Task 4

$product = [
    "Name" => "Laptop",
    "Brand" => "Dell",
    "Price" => 65000
];

echo "Task 4" . PHP_EOL;

print_r($product);

echo PHP_EOL;

// Task 5

$students = [

    [
        "Name" => "Sohug",
        "Department" => "CSE",
        "CGPA" => 3.80
    ],

    [
        "Name" => "Rahim",
        "Department" => "EEE",
        "CGPA" => 3.65
    ],

    [
        "Name" => "Karim",
        "Department" => "BBA",
        "CGPA" => 3.92
    ]

];

echo "Task 5" . PHP_EOL;

print_r($students[0]);

echo PHP_EOL;

// Task 6

echo "Task 6" . PHP_EOL;

echo $students[1]["Department"] . PHP_EOL;

echo PHP_EOL;

// Task 7

echo "Task 7" . PHP_EOL;

echo $students[2]["CGPA"] . PHP_EOL;

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;

echo "Total Fruits: " . count($fruits) . PHP_EOL;

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;

if (in_array("Mango", $fruits)) {
    echo "Mango Found" . PHP_EOL;
} else {
    echo "Mango Not Found" . PHP_EOL;
}

echo PHP_EOL;

// Task 10

echo "Task 10" . PHP_EOL;

foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}

echo PHP_EOL;

// Task 11

echo "Task 11" . PHP_EOL;

foreach ($students as $student) {

    echo "Student" . PHP_EOL;

    foreach ($student as $key => $value) {
        echo $key . ": " . $value . PHP_EOL;
    }

    echo PHP_EOL;
}

// Task 12

echo "Task 12" . PHP_EOL;

foreach ($student as $key => $value) {
    echo $key . PHP_EOL;
}

echo PHP_EOL;

// Task 13

echo "Task 13" . PHP_EOL;

foreach ($student as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;

// Task 14

echo "Task 14" . PHP_EOL;

echo "Total Students: " . count($students) . PHP_EOL;