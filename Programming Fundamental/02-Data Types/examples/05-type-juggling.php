<?php

//Type Juggling is the automatic conversion of one data type to another by PHP during program execution.

// PHP Type Juggling

// Example - 1(string+integer)

$number = "10";
echo "example 1" . PHP_EOL;
var_dump($number);

$result = $number + 5;

var_dump($result);
echo PHP_EOL;

//example - 2(string+float)

$price = "99.50";
echo "Example 2" . PHP_EOL;
var_dump($price);

$total = $price + 0.50;

var_dump($total);
echo PHP_EOL;


// Example - 3(Boolean + Integer)

$isStudent = true;
echo "Example 3" . PHP_EOL;
var_dump($isStudent);

$result = $isStudent + 10;

var_dump($result);
echo PHP_EOL;


// Example - 4(Numeric String)


$value = "100";
echo "Example 4" . PHP_EOL;
var_dump($value);

$value++;

var_dump($value);
echo PHP_EOL;


// Example - 5(Comparison)

$age = "25";
echo "Example 5" . PHP_EOL;

var_dump($age == 25);
var_dump($age === 25); //type check - string != integer. so,false

echo PHP_EOL;