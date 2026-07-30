<?php

/*

Comparison & Logical Operators

Task 1

Create two numbers.

$num1 = 50
$num2 = 100

Check:

Equal
Not Equal
Greater Than
Less Than

Task 2

A student can sit for the exam if

Age >= 18
AND
Has Admit Card
Print the result.

Task 3

A user can access Dashboard if

Admin
OR
Teacher

Print the result.

Task 4

Create a variable
$isBlocked = false
Print whether the account is active.
*/

// Solution

// Task 1

$num1 = 50;
$num2 = 100;

echo "Task 1" . PHP_EOL;

var_dump($num1 == $num2);
var_dump($num1 != $num2);
var_dump($num1 > $num2);
var_dump($num1 < $num2);

echo PHP_EOL;

// Task 2

$age = 20;
$hasAdmitCard = true;

echo "Task 2" . PHP_EOL;
var_dump($age >= 18 && $hasAdmitCard);

echo PHP_EOL;

// Task 3

$isAdmin = false;
$isTeacher = true;

echo "Task 3" . PHP_EOL;

var_dump($isAdmin || $isTeacher);

echo PHP_EOL;


// Task 4

$isBlocked = false;

echo "Task 4" . PHP_EOL;

var_dump(!$isBlocked);