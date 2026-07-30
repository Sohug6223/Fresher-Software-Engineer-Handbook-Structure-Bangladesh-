<?php

/*

PHP if...elseif...else Statement

The if...elseif...else statement is used when multiple conditions need to be checked.

PHP checks the conditions from top to bottom.

As soon as one condition becomes TRUE,

PHP executes that block and skips the remaining conditions.

Syntax

if (condition1) {

    // code

} elseif (condition2) {

    // code

} elseif (condition3) {

    // code

} else {

    // code

}
*/

// Example 1

echo "Example 1" . PHP_EOL;

$marks = 85;

if ($marks >= 80) {

    echo "Grade A+";

} elseif ($marks >= 70) {

    echo "Grade A";

} elseif ($marks >= 60) {

    echo "Grade B";

} elseif ($marks >= 50) {

    echo "Grade C";

} else {

    echo "Fail";

}

echo PHP_EOL;
echo PHP_EOL;

// Example 2

echo "Example 2" . PHP_EOL;

$age = 15;

if ($age >= 60) {

    echo "Senior Citizen";

} elseif ($age >= 18) {

    echo "Adult";

} elseif ($age >= 13) {

    echo "Teenager";

} else {

    echo "Child";

}

echo PHP_EOL;
echo PHP_EOL;

// Example 3

echo "Example 3" . PHP_EOL;

$purchase = 3500;

if ($purchase >= 5000) {

    echo "30% Discount";

} elseif ($purchase >= 3000) {

    echo "20% Discount";

} elseif ($purchase >= 1000) {

    echo "10% Discount";

} else {

    echo "No Discount";

}

echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$salary = 45000;

if ($salary >= 100000) {

    echo "Executive";

} elseif ($salary >= 50000) {

    echo "Senior Employee";

} else {

    echo "Junior Employee";

}

echo PHP_EOL;
echo PHP_EOL;

// Example 5
echo "Example 5" . PHP_EOL;

$signal = "Yellow";

if ($signal == "Green") {

    echo "Go";

} elseif ($signal == "Yellow") {

    echo "Wait";

} elseif ($signal == "Red") {

    echo "Stop";

} else {

    echo "Invalid Signal";

}

echo PHP_EOL;
echo PHP_EOL;
