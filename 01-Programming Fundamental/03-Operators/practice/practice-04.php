<?php

/*

Increment, Decrement & String Operators

 Task 1

Create

$count = 10

Increase it by one.

Print before and after.


Task 2

Create

$stock = 50

Decrease by one.

Print before and after.

Task 3

Create

$firstName
$lastName

Print Full Name.

Task 4

Create

$message = "Welcome"

Append

to PHP Programming

using .=
*/

// Solution

// Task 1

$count = 10;

echo "Before : $count" . PHP_EOL;

$count++;

echo "After  : $count" . PHP_EOL;

echo PHP_EOL;


// Task 2

$stock = 50;

echo "Before : $stock" . PHP_EOL;

$stock--;

echo "After  : $stock" . PHP_EOL;

echo PHP_EOL;


// Task 3

$firstName = "Sohug";
$lastName = "Mia";

$fullName = $firstName . " " . $lastName;

echo "Full Name : $fullName" . PHP_EOL;

echo PHP_EOL;


// Task 4

$message = "Welcome";

$message .= " to";
$message .= " PHP";
$message .= " Programming";

echo $message . PHP_EOL;