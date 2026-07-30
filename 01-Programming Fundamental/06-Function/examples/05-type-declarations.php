<?php

/*

 Type Declarations

 Type declarations specify the expected data type of parameters
 and return values.

*/

// Example 1: Integer Parameters

function add(int $a, int $b)
{
    return $a + $b;
}

echo "Example 1" . PHP_EOL;

echo add(10, 20) . PHP_EOL;

echo PHP_EOL;

// Example 2: Float Parameters

function calculateArea(float $radius)
{
    return 3.1416 * $radius * $radius;
}

echo "Example 2" . PHP_EOL;

echo calculateArea(5.5) . PHP_EOL;

echo PHP_EOL;

// Example 3: String Parameter

function greet(string $name)
{
    return "Hello, " . $name;
}

echo "Example 3" . PHP_EOL;

echo greet("Sohug") . PHP_EOL;

echo PHP_EOL;

// Example 4: Boolean Parameter

function checkLogin(bool $status)
{
    if ($status) {
        return "Login Successful";
    }

    return "Login Failed";
}

echo "Example 4" . PHP_EOL;

echo checkLogin(true) . PHP_EOL;
echo checkLogin(false) . PHP_EOL;

echo PHP_EOL;

// Example 5: Array Parameter

function showSubjects(array $subjects)
{
    print_r($subjects);
}

echo "Example 5" . PHP_EOL;

showSubjects([
    "Programming",
    "Database",
    "Networking"
]);

echo PHP_EOL;

// Example 6: Return Type Declaration

function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo "Example 6" . PHP_EOL;

echo multiply(6, 8) . PHP_EOL;

echo PHP_EOL;

// Example 7: Float Return Type

function average(int $a, int $b): float
{
    return ($a + $b) / 2;
}

echo "Example 7" . PHP_EOL;

echo average(80, 95) . PHP_EOL;

echo PHP_EOL;

// Example 8: Boolean Return Type

function isPassed(int $marks): bool
{
    return $marks >= 40;
}

echo "Example 8" . PHP_EOL;

var_dump(isPassed(70));
var_dump(isPassed(25));