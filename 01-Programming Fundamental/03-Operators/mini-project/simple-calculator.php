<?php

/*

Mini Project

Simple Calculator

Topics Used

 Variables
 readline()
 Arithmetic Operators
 Assignment Operator
 Comparison Operator
 Ternary Operator
 String Interpolation

*/

echo PHP_EOL;
echo "SIMPLE CALCULATOR" . PHP_EOL;
echo PHP_EOL;

$num1 = (float) readline("Enter First Number : ");
$num2 = (float) readline("Enter Second Number: ");

echo PHP_EOL;

echo "Choose Operation" . PHP_EOL;
echo "1. Addition (+)" . PHP_EOL;
echo "2. Subtraction (-)" . PHP_EOL;
echo "3. Multiplication (*)" . PHP_EOL;
echo "4. Division (/)" . PHP_EOL;
echo "5. Modulus (%)" . PHP_EOL;

echo PHP_EOL;

$choice = readline("Enter Choice (1-5): ");

echo PHP_EOL;

$result = 0;
$operation = "";

if ($choice == 1) {

    $result = $num1 + $num2;
    $operation = "+";

} elseif ($choice == 2) {

    $result = $num1 - $num2;
    $operation = "-";

} elseif ($choice == 3) {

    $result = $num1 * $num2;
    $operation = "*";

} elseif ($choice == 4) {

    if ($num2 == 0) {

        echo "Error: Division by zero is not allowed." . PHP_EOL;
        exit;

    }

    $result = $num1 / $num2;
    $operation = "/";

} elseif ($choice == 5) {

    if ($num2 == 0) {

        echo "Error: Modulus by zero is not allowed." . PHP_EOL;
        exit;

    }

    $result = $num1 % $num2;
    $operation = "%";

} else {

    echo "Invalid Choice!" . PHP_EOL;
    exit;
}

echo PHP_EOL;

echo "Expression : $num1 $operation $num2" . PHP_EOL;

echo "Result     : $result" . PHP_EOL;

echo "Status     : " . ($result >= 0 ? "Positive Result" : "Negative Result") . PHP_EOL;

echo PHP_EOL;