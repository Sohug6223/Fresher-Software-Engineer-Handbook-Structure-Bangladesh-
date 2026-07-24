<?php

/*

 Built-in Functions

 PHP provides many built-in functions that help perform common tasks.
 In this file, we will explore some frequently used functions.

*/

echo "Example 1" . PHP_EOL;

// Example 1: String Functions

$text = "Hello PHP";

echo "Length      : " . strlen($text) . PHP_EOL;
echo "Uppercase   : " . strtoupper($text) . PHP_EOL;
echo "Lowercase   : " . strtolower($text) . PHP_EOL;

echo PHP_EOL;



echo "Example 2" . PHP_EOL;

// Example 2: Number Functions

echo "Maximum : " . max(10, 50, 30) . PHP_EOL;
echo "Minimum : " . min(10, 50, 30) . PHP_EOL;
echo "Absolute: " . abs(-25) . PHP_EOL;
echo "Square Root: " . sqrt(64) . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Example 3: Date and Time Functions

echo "Current Date : " . date("Y-m-d") . PHP_EOL;
echo "Current Time : " . date("H:i:s") . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Example 4: Type Checking Functions

$value = 100;

var_dump(is_int($value));
var_dump(is_string($value));
var_dump(is_float($value));

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// Example 5: Math Functions

echo "Power (2^5): " . pow(2, 5) . PHP_EOL;
echo "Round: " . round(5.67) . PHP_EOL;
echo "Ceil : " . ceil(5.20) . PHP_EOL;
echo "Floor: " . floor(5.99) . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// Example 6: Random Numbers

echo "Random Number: " . rand(1, 100) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// Example 7: Array Functions

echo "Array functions will be covered in the Arrays chapter." . PHP_EOL;
echo "Examples: count(), sort(), array_push(), array_pop()" . PHP_EOL;