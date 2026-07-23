<?php

/*
Return Values

A function can return a value using the return keyword.

The returned value can be stored, displayed, or used in calculations.

*/

// Example 1: Returning a Number

function add($a, $b)
{
    return $a + $b;
}

echo "Example 1" . PHP_EOL;

$result = add(10, 20);

echo "Sum: " . $result . PHP_EOL;

echo PHP_EOL;

// Example 2: Returning a String

function university()
{
    return "City University";
}

echo "Example 2" . PHP_EOL;

echo university() . PHP_EOL;

echo PHP_EOL;

// Example 3: Returning a Boolean

function isPassed($marks)
{
    return $marks >= 40;
}

echo "Example 3" . PHP_EOL;

var_dump(isPassed(65));
var_dump(isPassed(32));

echo PHP_EOL;

// Example 4: Returning the Area of a Rectangle

function rectangleArea($length, $width)
{
    return $length * $width;
}

echo "Example 4" . PHP_EOL;

$area = rectangleArea(10, 5);

echo "Area: " . $area . PHP_EOL;

echo PHP_EOL;

// Example 5: Returning Early

function checkAge($age)
{
    if ($age < 18) {
        return "Not Eligible";
    }

    return "Eligible";
}

echo "Example 5" . PHP_EOL;

echo checkAge(15) . PHP_EOL;
echo checkAge(22) . PHP_EOL;

echo PHP_EOL;

// Example 6: Using a Returned Value in Another Calculation

function square($number)
{
    return $number * $number;
}

echo "Example 6" . PHP_EOL;

$total = square(5) + square(3);

echo "Total: " . $total . PHP_EOL;