<?php

/*

 Mini Project 01 - Calculator

 Create a simple calculator using functions.

 Features:

 - Addition
 - Subtraction
 - Multiplication
 - Division
 - Power
 - Modulus

*/

define("PROJECT_TITLE", "SIMPLE CALCULATOR");

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;

$choice = 0;

do {

    echo PHP_EOL;
    echo "1. Addition" . PHP_EOL;
    echo "2. Subtraction" . PHP_EOL;
    echo "3. Multiplication" . PHP_EOL;
    echo "4. Division" . PHP_EOL;
    echo "5. Power" . PHP_EOL;
    echo "6. Modulus" . PHP_EOL;
    echo "7. Exit" . PHP_EOL;

    echo PHP_EOL;

    $choice = (int) readline("Enter Choice: ");

    if ($choice == 7) {
        break;
    }

    if ($choice < 1 || $choice > 6) {

      echo PHP_EOL;
      echo "Invalid Choice!" . PHP_EOL;
      continue;
}

echo PHP_EOL;

    $firstNumber = (float) readline("Enter First Number : ");
    $secondNumber = (float) readline("Enter Second Number: ");

    echo PHP_EOL;

    switch ($choice) {

        case 1:
            echo "Result: " . add($firstNumber, $secondNumber) . PHP_EOL;
            break;

        case 2:
            echo "Result: " . subtract($firstNumber, $secondNumber) . PHP_EOL;
            break;

        case 3:
            echo "Result: " . multiply($firstNumber, $secondNumber) . PHP_EOL;
            break;

        case 4:
          echo "Result: " . divide($firstNumber, $secondNumber) . PHP_EOL;
            break;

        case 5:
            echo "Result: " . power($firstNumber, $secondNumber) . PHP_EOL;
            break;

        case 6:
            echo "Result: " . modulus((int)$firstNumber, (int)$secondNumber) . PHP_EOL;
            break;

      
    }

} while (true);

echo PHP_EOL;
echo "Thank you for using " . PROJECT_TITLE . "." . PHP_EOL;

// Functions


function add(float $a, float $b): float
{
    return $a + $b;
}

function subtract(float $a, float $b): float
{
    return $a - $b;
}

function multiply(float $a, float $b): float
{
    return $a * $b;
}

function divide(float $a, float $b): float|string
{
    if ($b == 0) {
        return "Error: Second number cannot be zero.";
    }

    return $a / $b;
}

function power(float $base, float $exponent): float
{
    return pow($base, $exponent);
}

function modulus(int $a, int $b): int|string
{
    if ($b == 0) {
        return "Error: Second number cannot be zero.";
    }

    return $a % $b;
}