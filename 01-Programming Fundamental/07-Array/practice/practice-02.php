<?php

/*
Practice 02 - Array Functions

Task 1

Create an indexed array containing five fruits.

Add "Mango" to the end
of the array.

Hint:

array_push()

Task 2

Remove the last element from the array.

Hint:

array_pop()


Task 3

Add "Pineapple"
to the beginning
of the array.

Hint:

array_unshift()


Task 4

Remove the first element
from the array.

Hint:

array_shift()


Task 5

Create two indexed arrays.

Merge them into
a single array.

Hint:

array_merge()


Task 6

Sort the merged array in ascending order.

Hint:

sort()


Task 7

Sort the merged array in descending order.

Hint:

rsort()


Task 8

Create an associative array
for a student.

Add a new key:

Email

Hint:

$array["Email"] = "...";


Task 9

Remove the CGPA key from the associative array.

Hint:

unset()


Task 10

Print all keys of the associative array.


Task 11

Print all values
of the associative array.


Task 12

Merge two associative arrays.

Example:

Student Information

+

Contact Information

*/

//solution

// Task 1

$fruits = ["Apple", "Banana", "Orange", "Grapes", "Guava"];

array_push($fruits, "Mango");

echo "Task 1:\n";
print_r($fruits);
echo PHP_EOL;


// Task 2

array_pop($fruits);

echo "Task 2:\n";
print_r($fruits);
echo PHP_EOL;


// Task 3

array_unshift($fruits, "Pineapple");

echo "Task 3:\n";
print_r($fruits);
echo PHP_EOL;


// Task 4

array_shift($fruits);

echo "Task 4:\n";
print_r($fruits);
echo PHP_EOL;

// Task 5

$array1 = ["PHP", "JavaScript", "Python"];
$array2 = ["Java", "C++", "Go"];

$mergedArray = array_merge($array1, $array2);

echo "Task 5:\n";
print_r($mergedArray);
echo PHP_EOL;

// Task 6

sort($mergedArray);

echo "Task 6:\n";
print_r($mergedArray);
echo PHP_EOL;


// Task 7

rsort($mergedArray);

echo "Task 7:\n";
print_r($mergedArray);
echo PHP_EOL;


// Task 8

$student = [
    "Name" => "Sohug",
    "Department" => "CSE",
    "University" => "City University",
    "CGPA" => 3.80
];

$student["Email"] = "sohug@example.com";

echo "Task 8:\n";
print_r($student);
echo PHP_EOL;


// Task 9

unset($student["CGPA"]);

echo "Task 9:\n";
print_r($student);
echo PHP_EOL;


// Task 10

echo "Task 10:\n";

foreach ($student as $key => $value) {
    echo $key . PHP_EOL;
}
// print_r(array_keys($student));

echo PHP_EOL;


// Task 11

echo "Task 11:\n";

foreach ($student as $value) {
    echo $value . PHP_EOL;
}
// print_r(array_values($student)); 

echo PHP_EOL;


// Task 12

$studentInfo = [
    "Name" => "Sohug",
    "Department" => "CSE",
    "University" => "City University"
];

$contactInfo = [
    "Email" => "sohug@example.com",
    "Phone" => "017XXXXXXXX",
    "Address" => "Dhaka"
];

$fullInfo = array_merge($studentInfo, $contactInfo);

echo "Task 12:\n";
print_r($fullInfo);

