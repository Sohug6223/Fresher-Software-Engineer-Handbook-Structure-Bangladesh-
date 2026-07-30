<?php 

// Type Casting is the process of converting one data type into another data type.

/* 
There are two types of type casting in php.

 1. Implict Type Casting (Automatic).

 <?php
$number = "10";
$result = $number + 5;
echo $result;

 2. Explicit Type Casting (Manual)
 
 <?php
 $number = "10";
 $number = (int) $number;
 echo $number;
*/

// PHP Type Casting

//string to integer

$age = "23";
echo "Before: ";
var_dump($age);

$age = (int) $age;

echo "After: ";
var_dump($age);
echo PHP_EOL;

//integer to string

$number = 100;
echo "Before: ";
var_dump($number);

$number = (string) $number;

echo "After: ";
var_dump($number);
echo PHP_EOL;

//float to integer

$cgpa = 3.85;
echo "Before: ";
var_dump($cgpa);

$cgpa = (int) $cgpa;

echo "After: ";
var_dump($cgpa);
echo PHP_EOL;

//integer to float

$marks = 90;
echo "Before: ";
var_dump($marks);

$marks = (float) $marks;

echo "After: ";
var_dump($marks);
echo PHP_EOL;

//integer to boolean

$value = 1;
echo "Before: ";
var_dump($value);

$value = (bool) $value;

echo "After: ";
var_dump($value);
echo PHP_EOL;

//string to array

$name = "Sohug";
echo "Before: ";
var_dump($name);

$name = (array) $name;

echo "After: ";
var_dump($name);
echo PHP_EOL;

/* 
casting - (int) 3.99 ; output = 3;
rounding - round(3.99); output = 4;
*/