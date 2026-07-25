<?php

/*
 Practice 04 - Variable Scope and Anonymous Functions


 Complete the following tasks using functions.

 Task 1
 Create a global variable named $country.

 Access and print it inside a function
 using the global keyword.

 Task 2
 Create a global variable named $university.

 Access and print it inside a function
 using the $GLOBALS array.

 Task 3
 Create a function that uses
 a static variable.

 Call the function five times.

 Expected Output

 1
 2
 3
 4
 5

 Task 4
 Create an anonymous function
 that prints "Hello, PHP!".

 Task 5
 Create an anonymous function
 that returns the sum of two numbers.

 Task 6
 Create an anonymous function
 that returns the area of a rectangle.

 Task 7
 Create an anonymous function
 that checks whether a number is even.

 Return:

 true
 false

 Task 8
 Create an arrow function
 that returns the square of a number.

 Task 9
 Create an arrow function
 that returns the cube of a number.

 Task 10
 Create an arrow function
 that returns the larger of two numbers.

 Task 11
 Create an arrow function
 that returns the smaller of two numbers.

 Hint:

 max()
 min()

 Task 12
 Create an arrow function
 that converts a string
 to uppercase.

 Hint:

 strtoupper()

 Task 13
 Create an arrow function
 that returns the length of a string.

 Hint:

 strlen()

 Task 14
 Create an arrow function
 that returns true
 if marks are greater than or equal to 40.

 Task 15
 Create an arrow function
 that returns the area of a circle.

 Use:

 3.1416

*/

// solution

declare(strict_types=1);

// Task 1

$country = "Bangladesh";

function showCountry()
{
    global $country;

    echo $country . PHP_EOL;
}

echo "Task 1" . PHP_EOL;
showCountry();

// Task 2

$university = "City University Bangladesh";

function showUniversity()
{
    echo $GLOBALS["university"] . PHP_EOL;
}

echo "Task 2" . PHP_EOL;

showUniversity();

// Task 3

function counter()
{
    static $count = 0;

    $count++;

    echo $count . PHP_EOL;
}

echo "Task 3" . PHP_EOL;

counter();
counter();
counter();
counter();
counter();

echo PHP_EOL;

// Task 4

$greet = function () {
    echo "Hello, PHP!" . PHP_EOL;
};

echo "Task 4" . PHP_EOL;

$greet();

// Task 5

$sum = function ($a, $b) {
    return $a + $b;
};

echo "Task 5" . PHP_EOL;

echo $sum(10, 20) . PHP_EOL;

// Task 6

$rectangleArea = function (float $length, $width): float
{
    return $length * $width;
};

echo "Task 6" . PHP_EOL;

echo $rectangleArea(10, 5) . PHP_EOL;

// Task 7

$isEven = function (int $number): bool {
    return $number % 2 == 0;
};

echo "Task 7" . PHP_EOL;

var_dump($isEven(8));
var_dump($isEven(7));

echo PHP_EOL;

// Task 8

$square = fn($number) => $number * $number;

echo "Task 8" . PHP_EOL;

echo $square(5) . PHP_EOL;

// Task 9

$cube = fn($number) => $number * $number * $number;

echo "Task 9" . PHP_EOL;

echo $cube(3) . PHP_EOL;

// Task 10


$larger = fn($a, $b) => max($a, $b);

echo "Task 10" . PHP_EOL;

echo $larger(20, 35) . PHP_EOL;

// Task 11

$smaller = fn($a, $b) => min($a, $b);

echo "Task 11" . PHP_EOL;

echo $smaller(20, 35) . PHP_EOL;

echo PHP_EOL;

// Task 12

$uppercase = fn($text) => strtoupper($text);

echo "Task 12" . PHP_EOL;

echo $uppercase("hello php") . PHP_EOL;

// Task 13

$stringLength = fn($text) => strlen($text);

echo "Task 13" . PHP_EOL;

echo $stringLength("Hello PHP") . PHP_EOL;

// Task 14

$isPassed = fn($marks) => $marks >= 40;

echo "Task 14" . PHP_EOL;

var_dump($isPassed(75));
var_dump($isPassed(30));

echo PHP_EOL;

// Task 15

$circleArea = fn($radius) => 3.1416 * $radius * $radius;

echo "Task 15" . PHP_EOL;

echo $circleArea(7) . PHP_EOL;