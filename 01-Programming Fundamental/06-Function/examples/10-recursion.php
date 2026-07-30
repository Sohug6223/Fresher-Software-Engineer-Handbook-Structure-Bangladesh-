<?php

/*
 Recursion

 A recursive function is a function that calls itself.

 Every recursive function must have a base condition.
 Otherwise, it will call itself forever and cause a fatal error.

*/

echo "Example 1" . PHP_EOL;

// Example 1: Countdown

function countdown($number)
{
    if ($number == 0) {
        return;
    }

    echo $number . PHP_EOL;

    countdown($number - 1);
}

countdown(5);

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// Example 2: Count Up

function countUp($number, $limit)
{
    if ($number > $limit) {
        return;
    }

    echo $number . PHP_EOL;

    countUp($number + 1, $limit);
}

countUp(1, 5);

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Example 3: Factorial

function factorial($number)
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}

echo "Factorial of 5 = " . factorial(5) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Example 4: Sum of Natural Numbers

function sum($number)
{
    if ($number == 1) {
        return 1;
    }

    return $number + sum($number - 1);
}

echo "Sum = " . sum(10) . PHP_EOL;