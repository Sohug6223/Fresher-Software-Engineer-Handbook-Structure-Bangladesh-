<?php

/*

 Function Parameters
 
 Parameters allow a function to receive values.
 They make functions more flexible and reusable.

*/

// Example 1: Single Parameter

function greet($name)
{
    echo "Hello, " . $name . "!" . PHP_EOL;
}

echo "Example 1" . PHP_EOL;

greet("Sohug");
greet("Sajib");

echo PHP_EOL;

// Example 2: Multiple Parameters

function introduce($name, $age)
{
    echo "Name: " . $name . PHP_EOL;
    echo "Age: " . $age . PHP_EOL;
}

echo "Example 2" . PHP_EOL;

introduce("Sohug", 24);

echo PHP_EOL;

// Example 3: Student Information

function studentInfo($name, $department, $cgpa)
{
    echo "Student Name: " . $name . PHP_EOL;
    echo "Department : " . $department . PHP_EOL;
    echo "CGPA       : " . $cgpa . PHP_EOL;
}

echo "Example 3" . PHP_EOL;

studentInfo("Sohug", "CSE", 3.85);

echo PHP_EOL;

// Example 4: Rectangle Information

function rectangle($length, $width)
{
    echo "Length : " . $length . PHP_EOL;
    echo "Width  : " . $width . PHP_EOL;
}

echo "Example 4" . PHP_EOL;

rectangle(15, 8);