<?php

/*
Practice 04 - Mixed Array Problems

Task 1

Create an indexed array containing five programming languages.

Print each language with its index.

Example

0 => PHP
1 => JavaScript


Task 2

Create an associative array for a book.

Keys:

Title
Author
Price

Print the information
using foreach.

Task 3

Create a multidimensional array containing three products.

Each product should have:

Name
Brand
Price

Print all product information.


Task 4

Create an indexed array containing five numbers.

Find:

Maximum Number

Hint:

max()


Task 5

Find:

Minimum Number

Hint:

min()


Task 6

Find:

Total Sum

Hint:

array_sum()


Task 7

Find:

Average

Hint:

array_sum()
count()


Task 8

Create an array containing duplicate values.

Remove duplicates.

Hint:

array_unique()


Task 9

Create an indexed array containing five fruits.

Reverse the array.

Hint:

array_reverse()


Task 10

Create an indexed array.

Shuffle the array.

Hint:

shuffle()


Task 11

Create an indexed array containing five numbers.

Check whether

50

exists.

Hint:

in_array()


Task 12

Create an associative array.

Check whether

Email

key exists.

Hint:

array_key_exists()


Task 13

Create two indexed arrays.

Find the common values.

Hint:

array_intersect()


Task 14

Create two indexed arrays.

Find the different values.

Hint:

array_diff()


Task 15

Create an associative array.

Print all keys alphabetically.

Hint:

ksort()

*/

//solution

// Task 1

echo "Task 1" . PHP_EOL;

$languages = ["PHP", "JavaScript", "Python", "Java", "C++"];

foreach ($languages as $index => $language) {
    echo $index . " => " . $language . PHP_EOL;
}

echo PHP_EOL;

// Task 2

echo "Task 2" . PHP_EOL;

$book = [
    "Title" => "Clean Code",
    "Author" => "Robert C. Martin",
    "Price" => 950
];

foreach ($book as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

echo PHP_EOL;

// Task 3

echo "Task 3" . PHP_EOL;

$products = [
    [
        "Name" => "Laptop",
        "Brand" => "Dell",
        "Price" => 65000
    ],
    [
        "Name" => "Phone",
        "Brand" => "Samsung",
        "Price" => 35000
    ],
    [
        "Name" => "Monitor",
        "Brand" => "LG",
        "Price" => 22000
    ]
];

foreach ($products as $product) {
    foreach ($product as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }
    echo PHP_EOL;
}

// Task 4

echo "Task 4" . PHP_EOL;

$numbers = [20, 50, 10, 80, 35];

echo "Maximum Number: " . max($numbers) . PHP_EOL;

echo PHP_EOL;

// Task 5

echo "Task 5" . PHP_EOL;

echo "Minimum Number: " . min($numbers) . PHP_EOL;

echo PHP_EOL;

// Task 6

echo "Task 6" . PHP_EOL;

echo "Total Sum: " . array_sum($numbers) . PHP_EOL;

echo PHP_EOL;

// Task 7

echo "Task 7" . PHP_EOL;

$average = array_sum($numbers) / count($numbers);

echo "Average: " . $average . PHP_EOL;

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;

$values = [10, 20, 30, 20, 40, 10, 50];

$uniqueValues = array_unique($values);

print_r($uniqueValues);

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;

$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

$reversed = array_reverse($fruits);

print_r($reversed);

echo PHP_EOL;

// Task 10

echo "Task 10" . PHP_EOL;

$students = ["Rahim", "Karim", "Sakib", "Nadim", "Jahid"];

shuffle($students);

print_r($students);

echo PHP_EOL;

// Task 11


echo "Task 11" . PHP_EOL;

$numbers = [10, 20, 30, 40, 50];

if (in_array(50, $numbers)) {
    echo "50 exists in the array." . PHP_EOL;
} else {
    echo "50 does not exist." . PHP_EOL;
}

echo PHP_EOL;

// Task 12

echo "Task 12" . PHP_EOL;

$user = [
    "Name" => "Sohug",
    "Email" => "sohug@example.com",
    "Age" => 22
];

if (array_key_exists("Email", $user)) {
    echo "Email key exists." . PHP_EOL;
} else {
    echo "Email key does not exist." . PHP_EOL;
}

echo PHP_EOL;

// Task 13

echo "Task 13" . PHP_EOL;

$array1 = [10, 20, 30, 40, 50];
$array2 = [30, 40, 50, 60, 70];

$common = array_intersect($array1, $array2);

print_r($common);

echo PHP_EOL;

// Task 14

echo "Task 14" . PHP_EOL;

$array1 = [10, 20, 30, 40, 50];
$array2 = [30, 40, 60, 70];

$difference = array_diff($array1, $array2);

print_r($difference);

echo PHP_EOL;

// Task 15

echo "Task 15" . PHP_EOL;

$student = [
    "Name" => "Sohug",
    "Department" => "CSE",
    "University" => "City University",
    "Age" => 22
];

ksort($student);

foreach ($student as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
