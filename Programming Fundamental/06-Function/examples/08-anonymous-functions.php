<?php

/*
 Anonymous Functions

 An anonymous function is a function without a name.
 It is also known as a Closure.

*/

echo "Example 1" . PHP_EOL;

// Example 1: Basic Anonymous Function

$greet = function () {
    echo "Hello, World!" . PHP_EOL;
};

$greet();

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// Example 2: Anonymous Function with Parameters

$add = function ($a, $b) {
    return $a + $b;
};

echo "Sum: " . $add(10, 20) . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Example 3: Returning a String

$introduce = function ($name, $department) {
    return "Name: $name, Department: $department";
};

echo $introduce("Sohug", "CSE") . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Example 4: Using an Anonymous Function Multiple Times

$multiply = function ($a, $b) {
    return $a * $b;
};

echo "5 × 4 = " . $multiply(5, 4) . PHP_EOL;
echo "8 × 7 = " . $multiply(8, 7) . PHP_EOL;

echo PHP_EOL;


echo " Example 5" . PHP_EOL;

// Example 5: Type Declarations

$rectangleArea = function (float $length, float $width): float {
    return $length * $width;
};

echo "Area: " . $rectangleArea(10.5, 5.2) . PHP_EOL;

/*
Normal function

function greet()
{
    echo "Hello";
}

greet();


Anonymous Function
$greet = function () {
    echo "Hello";
};

$greet();

 */