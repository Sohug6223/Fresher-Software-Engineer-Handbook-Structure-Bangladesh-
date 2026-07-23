<?php
/*
Task 1
Prime Number

Task 2
Prime Numbers 1-100

Task 3
Fibonacci Series

Task 4
Palindrome Number

Task 5
Reverse Number

Task 6
Armstrong Number

Task 7
Perfect Number

Task 8
Strong Number

Task 9
LCM of Two Numbers

Task 10
GCD of Two Numbers

Task 11
Decimal to Binary

Task 12
Binary to Decimal

Task 13
Count Digits

Task 14
Sum of Digits

Task 15
Maximum Number (without arrays)
*/

// Solution

// Task 1

$number = 17;
$isPrime = true;

if ($number < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

echo "Task 1: ";
echo $isPrime ? "Prime" : "Not Prime";
echo PHP_EOL . PHP_EOL;

// Task 2

echo "Task 2:" . PHP_EOL;

for ($number = 2; $number <= 100; $number++) {

    $isPrime = true;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $number . " ";
    }
}

echo PHP_EOL . PHP_EOL;

// Task 3

echo "Task 3:" . PHP_EOL;

$first = 0;
$second = 1;

for ($i = 1; $i <= 10; $i++) {
    echo $first . " ";

    $next = $first + $second;
    $first = $second;
    $second = $next;
}

echo PHP_EOL . PHP_EOL;

// Task 4
// Palindrome Number

$number = 121;
$temp = $number;
$reverse = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $reverse = $reverse * 10 + $digit;
    $temp = (int)($temp / 10);
}

echo "Task 4: ";

if ($number == $reverse) {
    echo "Palindrome";
} else {
    echo "Not Palindrome";
}

echo PHP_EOL . PHP_EOL;

// Task 5

$number = 12345;
$reverse = 0;

while ($number > 0) {
    $digit = $number % 10;
    $reverse = $reverse * 10 + $digit;
    $number = (int)($number / 10);
}

echo "Task 5: Reverse = $reverse";
echo PHP_EOL . PHP_EOL;

// Task 6

$number = 153;
$temp = $number;
$sum = 0;

while ($temp > 0) {
    $digit = $temp % 10;
    $sum += $digit * $digit * $digit;
    $temp = (int)($temp / 10);
}

echo "Task 6: ";

if ($sum == $number) {
    echo "Armstrong";
} else {
    echo "Not Armstrong";
}

echo PHP_EOL . PHP_EOL;

// Task 7

$number = 28;
$sum = 0;

for ($i = 1; $i <= $number / 2; $i++) {
    if ($number % $i == 0) {
        $sum += $i;
    }
}

echo "Task 7: ";

if ($sum == $number) {
    echo "Perfect Number";
} else {
    echo "Not Perfect Number";
}

echo PHP_EOL . PHP_EOL;

// Task 8

$number = 145;
$temp = $number;
$sum = 0;

while ($temp > 0) {

    $digit = $temp % 10;

    $factorial = 1;

    for ($i = 1; $i <= $digit; $i++) {
        $factorial *= $i;
    }

    $sum += $factorial;

    $temp = (int)($temp / 10);
}

echo "Task 8: ";

if ($sum == $number) {
    echo "Strong Number";
} else {
    echo "Not Strong Number";
}

echo PHP_EOL . PHP_EOL;

// Task 9

$a = 12;
$b = 18;

$max = ($a > $b) ? $a : $b;

while (true) {

    if ($max % $a == 0 && $max % $b == 0) {
        break;
    }

    $max++;
}

echo "Task 9: LCM = $max";
echo PHP_EOL . PHP_EOL;

// Task 10

$a = 12;
$b = 18;

while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
}

echo "Task 10: GCD = $a";
echo PHP_EOL . PHP_EOL;

// Task 11

$number = 25;
$binary = "";

while ($number > 0) {
    $binary = ($number % 2) . $binary;
    $number = (int)($number / 2);
}

echo "Task 11: Binary = $binary";
echo PHP_EOL . PHP_EOL;

// Task 12

$binary = 11001;
$decimal = 0;
$power = 1;

while ($binary > 0) {

    $digit = $binary % 10;

    $decimal += $digit * $power;

    $power *= 2;

    $binary = (int)($binary / 10);
}

echo "Task 12: Decimal = $decimal";
echo PHP_EOL . PHP_EOL;

// Task 13

$number = 123456;
$count = 0;

while ($number > 0) {
    $count++;
    $number = (int)($number / 10);
}

echo "Task 13: Digits = $count";
echo PHP_EOL . PHP_EOL;

// Task 14

$number = 12345;
$sum = 0;

while ($number > 0) {
    $sum += $number % 10;
    $number = (int)($number / 10);
}

echo "Task 14: Sum = $sum";
echo PHP_EOL . PHP_EOL;

// Task 15

$a = 45;
$b = 78;
$c = 32;

$max = $a;

if ($b > $max) {
    $max = $b;
}

if ($c > $max) {
    $max = $c;
}

echo "Task 15: Maximum = $max";
echo PHP_EOL;