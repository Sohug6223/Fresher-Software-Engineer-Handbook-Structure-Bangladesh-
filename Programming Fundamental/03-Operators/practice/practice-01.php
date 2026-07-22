<?php

/*
Arithmetic Operators

Task 1:-

Create two variables.

$num1 = 50
$num2 = 20

Print:

Addition
Subtraction
Multiplication
Division
Modulus
Exponentiation

Task 2:-

A product price is 850 Tk.

Delivery charge is 120 Tk.

Calculate the total bill.

Task 3 :-

A student obtained 430 marks
out of 500.

Calculate the percentage.

*/

// Solution

// Task 1

$num1 = 50;
$num2 = 20;

echo "Task 1" . PHP_EOL;

echo "Addition       : " . ($num1 + $num2) . PHP_EOL;
echo "Subtraction    : " . ($num1 - $num2) . PHP_EOL;
echo "Multiplication : " . ($num1 * $num2) . PHP_EOL;
echo "Division       : " . ($num1 / $num2) . PHP_EOL;
echo "Modulus        : " . ($num1 % $num2) . PHP_EOL;
echo "Exponentiation : " . ($num1 ** 2) . PHP_EOL;

echo PHP_EOL;


// Task 2

$productPrice = 850;
$deliveryCharge = 120;

$totalBill = $productPrice + $deliveryCharge;

echo "Task 2" . PHP_EOL;

echo "Total Bill : $totalBill Tk" . PHP_EOL;

echo PHP_EOL;

// Task 3

$totalMarks = 500;
$obtainedMarks = 430;

$percentage = ($obtainedMarks / $totalMarks) * 100;

echo "Task 3" . PHP_EOL;

echo "Percentage : $percentage%" . PHP_EOL;