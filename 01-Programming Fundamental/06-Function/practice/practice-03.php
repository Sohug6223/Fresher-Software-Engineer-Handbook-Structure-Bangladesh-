<?php

/*
 Practice 03 - Default Parameters and Type Declarations

 Complete the following tasks using functions.

 Task 1
 Create a function that greets a user.

 If no name is provided,
 use "Guest" as the default value.

 Task 2
 Create a function that prints product information.

 Default Quantity = 1

 Parameters:
 Product Name
 Quantity

 Task 3
 Create a function that returns the delivery charge.

 Default Location = Dhaka

 Rules:

 Dhaka = 60 BDT
 Outside Dhaka = 130 BDT

 Task 4
 Create a function that returns
 the square of an integer.

 Use type declarations.

 Task 5
 Create a function that returns
 the area of a rectangle.

 Use:

 float parameters
 float return type

 Task 6
 Create a function that checks
 whether a student has passed.

 Parameter:
 int marks

 Return Type:
 bool

 Task 7
 Create a function that returns
 the average of three integers.

 Return Type:
 float

 Task 8
 Create a function that returns
 the greater number.

 Parameters:
 int
 int

 Return Type:
 int

 Task 9
 Create a function that returns
 the absolute value of a number.

 Hint:

 abs()

 Task 10
 Create a function that returns
 the maximum value among three numbers.

 Hint:

 max()

 Task 11
 Create a function that returns
 the minimum value among three numbers.

 Hint:

 min()

 Task 12
 Create a function that returns
 the length of a string.

 Hint:

 strlen()

 Task 13
 Create a function that converts
 a string to uppercase.

 Hint:

 strtoupper()

 Task 14
 Create a function that returns
 the current date.

 Hint:

 date("Y-m-d")

 Task 15
 Create a function that returns
 the current time.

 Hint:

 date("H:i:s")

*/

//solution


declare(strict_types=1);

// Task 1

function greet($name = "Guest")
{
    echo "Hello, " . $name . "!" . PHP_EOL;
}

echo "Task 1" . PHP_EOL;

greet();
greet("Sohug");

echo PHP_EOL;

// Task 2

function productInfo($productName, $quantity = 1)
{
    echo "Product Name: " . $productName . PHP_EOL;
    echo "Quantity: " . $quantity . PHP_EOL;
}

echo "Task 2" . PHP_EOL;

productInfo("Laptop");
echo PHP_EOL;
productInfo("Mouse", 3);

echo PHP_EOL;

// Task 3

function deliveryCharge($location = "Dhaka")
{
    if ($location == "Dhaka") {
        return 60;
    }

    return 130;
}

echo " Task 3" . PHP_EOL;

echo "Dhaka: " . deliveryCharge() . " BDT" . PHP_EOL;
echo "Rajshahi: " . deliveryCharge("Rajshahi") . " BDT" . PHP_EOL;

echo PHP_EOL;

// Task 4


function square(int $number)
{
    return $number * $number;
}

echo "Task 4" . PHP_EOL;

echo square(5) . PHP_EOL;

echo PHP_EOL;

// Task 5

function rectangleArea(float $length, float $width): float
{
    return $length * $width;
}

echo "Task 5" . PHP_EOL;

echo rectangleArea(10.5, 5.2) . PHP_EOL;

echo PHP_EOL;

// Task 6

function hasPassed(int $marks): bool
{
    return $marks >= 40;
}

echo "Task 6" . PHP_EOL;

var_dump(hasPassed(70));
var_dump(hasPassed(25));

echo PHP_EOL;

// Task 7

function average(int $a, int $b, int $c): float
{
    return ($a + $b + $c) / 3;
}

echo "Task 7" . PHP_EOL;

echo average(80, 90, 100) . PHP_EOL;

echo PHP_EOL;

// Task 8

function greaterNumber(int $a, int $b): int
{
    return max($a, $b);
}

echo "Task 8" . PHP_EOL;

echo greaterNumber(25, 40) . PHP_EOL;

echo PHP_EOL;

// Task 9

function absoluteValue(float $number):float
{
    return abs($number);
}

echo "Task 9" . PHP_EOL;

echo absoluteValue(-50) . PHP_EOL;

echo PHP_EOL;

// Task 10

function maximumNumber(float $a, $b, $c):float
{
    return max($a, $b, $c);
}

echo "Task 10" . PHP_EOL;

echo maximumNumber(10, 50, 30) . PHP_EOL;

echo PHP_EOL;

// Task 11

function minimumNumber(float $a, $b, $c):float
{
    return min($a, $b, $c);
}

echo "Task 11" . PHP_EOL;

echo minimumNumber(10, 50, 30) . PHP_EOL;

echo PHP_EOL;

// Task 12

function stringLength($text)
{
    return strlen($text);
}

echo "Task 12" . PHP_EOL;

echo stringLength("Hello PHP") . PHP_EOL;

echo PHP_EOL;

// Task 13

function toUppercase($text)
{
    return strtoupper($text);
}

echo "Task 13" . PHP_EOL;

echo toUppercase("hello world") . PHP_EOL;

echo PHP_EOL;

// Task 14

function currentDate()
{
    return date("Y-m-d");
}

echo "Task 14" . PHP_EOL;

echo currentDate() . PHP_EOL;

echo PHP_EOL;

// Task 15

function currentTime()
{
    return date("H:i:s");
}

echo "Task 15" . PHP_EOL;

echo currentTime() . PHP_EOL;