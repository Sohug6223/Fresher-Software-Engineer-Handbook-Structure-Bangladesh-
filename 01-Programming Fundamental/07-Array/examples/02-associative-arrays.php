<?php
/*
Associative Array

An associative array stores data as key-value pairs.

Instead of numeric indexes, associative arrays use custom keys. 

*/

// Creating an Associative Array

$student = [
    "name" => "Sohug",
    "department" => "CSE",
    "university" => "City University Bangladesh",
    "cgpa" => 3.85
];

echo "Student Information" . PHP_EOL;

print_r($student);
echo PHP_EOL;

// Accessing Values

echo "Accessing Values" . PHP_EOL;

echo "Name: " . $student["name"] . PHP_EOL;
echo "Department: " . $student["department"] . PHP_EOL;
echo "University: " . $student["university"] . PHP_EOL;
echo "CGPA: " . $student["cgpa"] . PHP_EOL;

echo PHP_EOL;

// Total Elements

echo "Total Elements" . PHP_EOL;
echo count($student) . PHP_EOL;
echo PHP_EOL;

//print_r()

echo "print_r()".PHP_EOL;
print_r($student);
echo PHP_EOL;

// var_dump()

echo "var_dump()" . PHP_EOL;
var_dump($student);
echo PHP_EOL;