<?php

/*
 Practice 05 - Recursion

 Complete the following tasks using recursion.

 Task 1
 Print numbers from 1 to 10.

 Task 2
 Print numbers from 10 to 1.

 Task 3
 Find the factorial of a number.

 Example:

 factorial(5)

 Output:
 120

 Task 4
 Find the sum of natural numbers.

 Example:

 sum(10)

 Output:
 55

 Task 5
 Calculate x raised to the power n.

 Example:

 power(2, 5)

 Output:
 32

 Task 6
 Print the Fibonacci series.

 Example:

 0 1 1 2 3 5 8 13 ...

 Task 7
 Reverse a string.

 Example:

 Hello

 Output:
 olleH

 Task 8
 Check whether a string
 is a palindrome.

 Example:

 madam

 Output:
 Palindrome

 Task 9
 Find the GCD of two numbers.

 Example:

 gcd(12, 18)

 Output:
 6

 Task 10
 Find the LCM of two numbers
 using the GCD function.

 Example:

 lcm(12, 18)

 Output:
 36

 Task 11
 Find the sum of digits.

 Example:

 12345

 Output:
 15

 Task 12
 Count the digits of a number.

 Example:

 987654

 Output:
 6

 Task 13
 Find the product of digits.

 Example:

 1234

 Output:
 24

 Task 14
 Find the maximum value
 in an array using recursion.

 Note:

 We have not learned arrays yet.
 Complete this task after finishing
 the Arrays chapter.

 Task 15
 Find the minimum value
 in an array using recursion.

 Note:

 We have not learned arrays yet.
 Complete this task after finishing
 the Arrays chapter.

*/

// solution

// Task 1

function printAscending($number)
{
    if ($number > 10) {
        return;
    }

    echo $number . PHP_EOL;

    printAscending($number + 1);
}

echo "Task 1" . PHP_EOL;

printAscending(1);

echo PHP_EOL;

// Task 2

function printDescending($number)
{
    if ($number < 1) {
        return;
    }

    echo $number . PHP_EOL;

    printDescending($number - 1);
}

echo "Task 2" . PHP_EOL;

printDescending(10);

echo PHP_EOL;

// Task 3

function factorial($number)
{
    if ($number == 0 || $number == 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}

echo "Task 3" . PHP_EOL;

echo factorial(5) . PHP_EOL;

echo PHP_EOL;

// Task 4

function sum($number)
{
    if ($number == 1) {
        return 1;
    }

    return $number + sum($number - 1);
}

echo "Task 4" . PHP_EOL;

echo sum(10) . PHP_EOL;

echo PHP_EOL;

// Task 5

function power($base, $exponent)
{
    if ($exponent == 0) {
        return 1;
    }

    return $base * power($base, $exponent - 1);
}

echo "Task 5" . PHP_EOL;

echo power(2, 5) . PHP_EOL;

echo PHP_EOL;

// Task 6

function fibonacci($number)
{
    if ($number == 0) {
        return 0;
    }

    if ($number == 1) {
        return 1;
    }

    return fibonacci($number - 1) + fibonacci($number - 2);
}

echo "Task 6" . PHP_EOL;

for ($i = 0; $i < 10; $i++) {
    echo fibonacci($i) . " ";
}

echo PHP_EOL . PHP_EOL;

// Task 7

function reverseString($text)
{
    if ($text == "") {
        return "";
    }

    return reverseString(substr($text, 1)) . $text[0];
}

echo "Task 7" . PHP_EOL;

echo reverseString("Hello") . PHP_EOL;

echo PHP_EOL;

// Task 8

function isPalindrome($text)
{
    if (strlen($text) <= 1) {
        return true;
    }

    if ($text[0] != $text[strlen($text) - 1]) {
        return false;
    }

    return isPalindrome(substr($text, 1, -1));
}

echo "Task 8" . PHP_EOL;

echo isPalindrome("madam") ? "Palindrome" : "Not Palindrome";

echo PHP_EOL . PHP_EOL;

// Task 9

function gcd($a, $b)
{
    if ($b == 0) {
        return $a;
    }

    return gcd($b, $a % $b);
}

echo "Task 9" . PHP_EOL;

echo gcd(12, 18) . PHP_EOL;

echo PHP_EOL;

// Task 10

function lcm($a, $b)
{
    return ($a * $b) / gcd($a, $b);
}

echo "Task 10" . PHP_EOL;

echo lcm(12, 18) . PHP_EOL;

echo PHP_EOL;

// Task 11

function sumOfDigits($number)
{
    if ($number == 0) {
        return 0;
    }

    return ($number % 10) + sumOfDigits((int)($number / 10));
}

echo "Task 11" . PHP_EOL;

echo sumOfDigits(12345) . PHP_EOL;

echo PHP_EOL;

// Task 12

function countDigits($number)
{
    if ($number < 10) {
        return 1;
    }

    return 1 + countDigits((int)($number / 10));
}

echo "Task 12" . PHP_EOL;

echo countDigits(987654) . PHP_EOL;

echo PHP_EOL;

// Task 13

function productOfDigits($number)
{
    if ($number < 10) {
        return $number;
    }

    return ($number % 10) * productOfDigits((int)($number / 10));
}

echo "Task 13" . PHP_EOL;

echo productOfDigits(1234) . PHP_EOL;

echo PHP_EOL;

// Task 14

echo "Task 14" . PHP_EOL;
echo "Complete this task after finishing the Arrays chapter." . PHP_EOL;

echo PHP_EOL;

function maximumValue(array $numbers, int $index = 0)
{
    if ($index == count($numbers) - 1) {
        return $numbers[$index];
    }

    $maximum = maximumValue($numbers, $index + 1);

    if ($numbers[$index] > $maximum) {
        return $numbers[$index];
    }

    return $maximum;
}

echo "Task 14" . PHP_EOL;

$numbers = [25, 80, 15, 60, 40];

echo maximumValue($numbers) . PHP_EOL;

echo PHP_EOL;


// Task 15

echo "Task 15" . PHP_EOL;
echo "Complete this task after finishing the Arrays chapter." . PHP_EOL;

echo PHP_EOL;

function minimumValue(array $numbers, int $index = 0)
{
    if ($index == count($numbers) - 1) {
        return $numbers[$index];
    }

    $minimum = minimumValue($numbers, $index + 1);

    if ($numbers[$index] < $minimum) {
        return $numbers[$index];
    }

    return $minimum;
}

echo "Task 15" . PHP_EOL;

echo minimumValue($numbers) . PHP_EOL;

echo PHP_EOL;