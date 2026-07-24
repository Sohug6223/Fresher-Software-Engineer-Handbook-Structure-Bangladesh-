<?php

/*
 Arrow Functions

 Arrow functions provide a shorter syntax for writing
 simple anonymous functions.

 Introduced in PHP 7.4

*/

echo "Example 1" . PHP_EOL;

// Example 1: Basic Arrow Function

$greet = fn() => "Hello, World!";

echo $greet() . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// Example 2: Addition

$add = fn($a, $b) => $a + $b;

echo "Sum: " . $add(10, 20) . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Example 3: Multiplication

$multiply = fn($a, $b) => $a * $b;

echo "Product: " . $multiply(8, 6) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Example 4: Returning a Boolean

$isPassed = fn($marks) => $marks >= 40;

var_dump($isPassed(65));
var_dump($isPassed(25));

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// Example 5: Type Declarations

$rectangleArea = fn(float $length, float $width): float => $length * $width;

echo "Area: " . $rectangleArea(10.5, 4.5) . PHP_EOL;

/*
Limitations of Arrow Functions

Arrow Functions are designed for single expressions.

Good: 

$square = fn($number) => $number * $number;

Not Allowed:

$calculate = fn($a, $b) => {

    $sum = $a + $b;

    return $sum;

};


 */