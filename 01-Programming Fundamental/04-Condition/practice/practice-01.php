<?php

/*

1. Create a program to check whether a number is Even or Odd.


2. Check whether a number is Positive, Negative or Zero.


3. Find the larger number between two numbers.

4. Create a program to check whether a student has passed or failed.

5. Create a program to check whether a person is eligible to vote.

*/

// Solution

// Task 1 -> Even /Odd

$number = 10;

if ($number % 2 == 0) {
    echo "Task 1: Even" . PHP_EOL;
} else {
    echo "Task 1: Odd" . PHP_EOL;
}

echo PHP_EOL;

// Task 2 -> Positive / Negative / Zero

$number = -5;

if ($number > 0) {

    echo "Task 2: Positive" . PHP_EOL;

} 
elseif ($number < 0) {

    echo "Task 2: Negative" . PHP_EOL;

} 
else {

    echo "Task 2: Zero" . PHP_EOL;

}

echo PHP_EOL;

// Task 3 -> Larger Number

$firstNumber = 20;
$secondNumber = 15;

if ($firstNumber > $secondNumber) {

    echo "Task 3: $firstNumber is larger." . PHP_EOL;

} 
else {

    echo "Task 3: $secondNumber is larger." . PHP_EOL;

}

echo PHP_EOL;

// Task 4 -> Pass / Fail

$marks = 45;

if ($marks >= 33) {

    echo "Task 4: Pass" . PHP_EOL;

} 
else {

    echo "Task 4: Fail" . PHP_EOL;

}

echo PHP_EOL;

// Task 5 -> Voting Eligibility

$age = 20;

if ($age >= 18) {

    echo "Task 5: Eligible to Vote" . PHP_EOL;

} 
else {

    echo "Task 5: Not Eligible to Vote" . PHP_EOL;

}