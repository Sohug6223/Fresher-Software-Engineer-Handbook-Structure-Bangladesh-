<?php

/*

Practice 03 - Array Destructuring and Spread Operator

Task 1

Create an indexed array
containing:

Name
Department
CGPA

Use array destructuring to store the values in separate variables.

Print all variables.

Task 2

Create an indexed array containing five numbers.

Ignore the second
and fourth values
using destructuring.

Print the remaining values.


Task 3

Create an associative array for an employee.

Keys:

Name
Department
Salary

Use associative
array destructuring.

Print all values.


Task 4

Create two variables.

Swap their values using array destructuring.

Example

Before

10
20

After

20
10


Task 5

Create an indexed array of three fruits.

Create a copy of the array using the spread operator.

Print the copied array.


Task 6

Create two indexed arrays.

Merge them using the spread operator.

Print the merged array.


Task 7

Create an array.

Add two new elements using the spread operator.

Print the new array.


Task 8

Create three arrays.

Merge all arrays using the spread operator.

Print the final array.


Task 9

Create an associative array.

Add two new keys using the spread operator.

Print the updated array.


Task 10

Create two arrays.

Merge them using:

1. array_merge()

2. Spread Operator

Print both results.

*/

//solution

// Task 1

echo "Task 1" . PHP_EOL;

$student = ["Sohug", "CSE", 3.85];

[$name, $department, $cgpa] = $student;

echo "Name: $name" . PHP_EOL;
echo "Department: $department" . PHP_EOL;
echo "CGPA: $cgpa" . PHP_EOL;

echo PHP_EOL;


// Task 2

echo "Task 2" . PHP_EOL;

$numbers = [10, 20, 30, 40, 50];

[$first, , $third, , $fifth] = $numbers;

echo "First: $first" . PHP_EOL;
echo "Third: $third" . PHP_EOL;
echo "Fifth: $fifth" . PHP_EOL;

echo PHP_EOL;


// Task 3

echo "Task 3" . PHP_EOL;

$employee = [
    "Name" => "Rahim",
    "Department" => "IT",
    "Salary" => 50000
];

[
    "Name" => $empName,
    "Department" => $empDepartment,
    "Salary" => $salary
] = $employee;

echo "Name: $empName" . PHP_EOL;
echo "Department: $empDepartment" . PHP_EOL;
echo "Salary: $salary" . PHP_EOL;

echo PHP_EOL;


// Task 4

echo "Task 4" . PHP_EOL;

$a = 10;
$b = 20;

echo "Before Swap" . PHP_EOL;
echo "A = $a" . PHP_EOL;
echo "B = $b" . PHP_EOL;

[$a, $b] = [$b, $a];

echo PHP_EOL;

echo "After Swap" . PHP_EOL;
echo "A = $a" . PHP_EOL;
echo "B = $b" . PHP_EOL;

echo PHP_EOL;


// Task 5

echo "Task 5" . PHP_EOL;


$fruits = ["Apple", "Banana", "Orange"];

$copyFruits = [...$fruits];

foreach ($copyFruits as $fruit) {
    echo $fruit . PHP_EOL;
}

echo PHP_EOL;


// Task 6

echo "Task 6" . PHP_EOL;

$array1 = [1, 2, 3];
$array2 = [4, 5, 6];

$merged = [...$array1, ...$array2];

foreach ($merged as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;


// Task 7

echo "Task 7" . PHP_EOL;

$colors = ["Red", "Green", "Blue"];

$newColors = [...$colors, "Black", "White"];

foreach ($newColors as $color) {
    echo $color . PHP_EOL;
}

echo PHP_EOL;


// Task 8

echo "Task 8" . PHP_EOL;

$arrayA = [10, 20];
$arrayB = [30, 40];
$arrayC = [50, 60];

$finalArray = [...$arrayA, ...$arrayB, ...$arrayC];

foreach ($finalArray as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;


// Task 9

echo "Task 9" . PHP_EOL;

$studentInfo = [
    "Name" => "Sohug",
    "Department" => "CSE"
];

$updatedStudent = [
    ...$studentInfo,
    "CGPA" => 3.85,
    "University" => "City University"
];

foreach ($updatedStudent as $key => $value) {
    echo "$key: $value" . PHP_EOL;
}

echo PHP_EOL;


// Task 10

echo "Task 10" . PHP_EOL;

$firstArray = ["HTML", "CSS"];
$secondArray = ["PHP", "Laravel"];

// array_merge()

$result1 = array_merge($firstArray, $secondArray);

echo "Using array_merge()" . PHP_EOL;

foreach ($result1 as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;

// Spread Operator

$result2 = [...$firstArray, ...$secondArray];

echo "Using Spread Operator" . PHP_EOL;

foreach ($result2 as $value) {
    echo $value . PHP_EOL;
}