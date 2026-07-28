<?php

/*

  Array Destructuring

 Array destructuring allows you to extract array elements into separate variables.

 This feature makes your code cleaner and easier to read.

 Note:
 This is a modern PHP feature.
 Beginners should first understand basic arrays before using destructuring.

*/

// Basic Array Destructuring

$student = [
    "Sohug",
    "CSE",
    3.85
];

[$name, $department, $cgpa] = $student;

echo "Basic Destructuring" . PHP_EOL;

echo "Name       : " . $name . PHP_EOL;
echo "Department : " . $department . PHP_EOL;
echo "CGPA       : " . $cgpa . PHP_EOL;

echo PHP_EOL;

// Ignoring Values

$numbers = [
    10,
    20,
    30,
    40
];

[$first, , $third] = $numbers;

echo "Ignoring Values" . PHP_EOL;

echo "First Number : " . $first . PHP_EOL;
echo "Third Number : " . $third . PHP_EOL;

echo PHP_EOL;

// Associative Array Destructuring

$employee = [
    "name" => "Rahim",
    "department" => "IT",
    "salary" => 50000
];

[
    "name" => $employeeName,
    "department" => $employeeDepartment,
    "salary" => $employeeSalary
] = $employee;

echo "Associative Array Destructuring" . PHP_EOL;

echo "Name       : " . $employeeName . PHP_EOL;
echo "Department : " . $employeeDepartment . PHP_EOL;
echo "Salary     : " . $employeeSalary . PHP_EOL;

echo PHP_EOL;

// Swapping Variables

$first = 100;
$second = 200;

echo "Before Swap" . PHP_EOL;

echo "First  : " . $first . PHP_EOL;
echo "Second : " . $second . PHP_EOL;

echo PHP_EOL;

[$first, $second] = [$second, $first];

echo "After Swap" . PHP_EOL;

echo "First  : " . $first . PHP_EOL;
echo "Second : " . $second . PHP_EOL;

echo PHP_EOL;