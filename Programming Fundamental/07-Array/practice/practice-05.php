<?php

/*

Practice 05 - Interview Style Array Problems

Task 1

Create an indexed array containing five numbers.

Print:

Largest Number
Smallest Number


Task 2

Find:

Total
Average


Task 3

Create two indexed arrays.

Merge them.

Sort the merged array in ascending order.



Task 4

Find the total number
of students.


Task 5

Use array destructuring.

Store:

Name
Department
CGPA

into separate variables.

Print all variables.


Task 6

Create two arrays.

Merge them
using the spread operator.


Task 7

Create an associative array.

Add:

Email
Phone

using the spread operator.


Task 8

Reverse an array.


Task 9

Create two arrays.

Find:

Common Values

Different Values

using:

array_intersect()

array_diff()

*/

//solution

// Task 1

echo "Task 1" . PHP_EOL;

$numbers = [25, 80, 15, 60, 40];

echo "Largest Number: " . max($numbers) . PHP_EOL;
echo "Smallest Number: " . min($numbers) . PHP_EOL;

echo PHP_EOL;


// Task 2

echo "Task 2" . PHP_EOL;

$total = array_sum($numbers);
$average = $total / count($numbers);

echo "Total: $total" . PHP_EOL;
echo "Average: $average" . PHP_EOL;

echo PHP_EOL;


// Task 3

echo "Task 3" . PHP_EOL;

$array1 = [5, 2, 8];
$array2 = [1, 7, 3];

$merged = array_merge($array1, $array2);

sort($merged);

echo "Merged & Sorted Array:" . PHP_EOL;

foreach ($merged as $value) {
    echo $value . " ";
}

echo PHP_EOL . PHP_EOL;


// Task 4

echo "Task 4" . PHP_EOL;

$students = ["Rahim", "Karim", "Sakib", "Nabil", "Rifat"];

echo "Total Students: " . count($students) . PHP_EOL;

echo PHP_EOL;

//Task 5

echo "Task 5" . PHP_EOL;

$student = ["Sohug", "CSE", 3.90];

[$name, $department, $cgpa] = $student;

echo "Name: $name" . PHP_EOL;
echo "Department: $department" . PHP_EOL;
echo "CGPA: $cgpa" . PHP_EOL;

echo PHP_EOL;

// Task 6

echo "Task 6" . PHP_EOL;

$frontend = ["HTML", "CSS", "JavaScript"];
$backend = ["PHP", "Laravel", "MySQL"];

$fullStack = [...$frontend, ...$backend];

print_r($fullStack);

echo PHP_EOL;


// Task 7

echo "Task 7" . PHP_EOL;

$user = [
    "Name" => "Sohug",
    "Department" => "CSE",
];

$userInfo = [
    ...$user,
    "Email" => "sohug@example.com",
    "Phone" => "01700000000",
];

print_r($userInfo);

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;

$languages = ["PHP", "JavaScript", "Python", "Java"];

$reversed = array_reverse($languages);

print_r($reversed);

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;

$arrayA = [10, 20, 30, 40, 50];
$arrayB = [30, 40, 50, 60, 70];

$common =array_values(array_intersect($arrayA, $arrayB));

$different = array_values(array_diff($arrayA, $arrayB));

echo "Common Values:" . PHP_EOL;
print_r($common);

echo PHP_EOL;

echo "Different Values:" . PHP_EOL;
print_r($different);

echo PHP_EOL;