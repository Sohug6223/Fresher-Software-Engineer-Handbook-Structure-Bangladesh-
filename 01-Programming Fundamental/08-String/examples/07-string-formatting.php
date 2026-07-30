<?php

/*

 String Formatting

 PHP provides several functions to format strings for display.

*/

echo "Example 1" . PHP_EOL;

// printf() -> Formatted output

$name = "Sohug";
$cgpa = 3.85;

printf("Name: %s\n", $name);
printf("CGPA: %.2f\n", $cgpa);

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// sprintf() -> Return formatted string

$product = "Laptop";
$price = 65000;

$result = sprintf("%s Price: %d BDT", $product, $price);

echo $result . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// number_format() -> Format decimal number

$salary = 1250000.5;

echo number_format($salary, 2) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// number_format() -> Add thousands separator

$amount = 5000000;

echo number_format($amount) . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// str_pad() -> Add leading zeros

$id = "25";

echo str_pad($id, 5, "0", STR_PAD_LEFT) . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// str_repeat() -> Repeat a character

echo str_repeat("-", 30) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// str_pad() -> Align text

$language = "PHP";

echo "[" . str_pad($language, 15) . "]" . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Format currency

$price = 15999.5;

echo "Price: " . number_format($price, 2) . " BDT" . PHP_EOL;

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// Format percentage

$marks = 86.6666;

printf("Marks: %.2f%%\n", $marks);

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example -> Student Report

$name = "Sohug";
$department = "CSE";
$cgpa = 3.85;

printf(
    "Student: %s | Department: %s | CGPA: %.2f\n",
    $name,
    $department,
    $cgpa
);

echo PHP_EOL;