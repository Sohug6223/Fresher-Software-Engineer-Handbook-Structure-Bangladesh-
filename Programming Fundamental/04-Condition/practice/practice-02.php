<?php

/*


1. Create a program to calculate a student's grade.

2. Create a BMI Category Checker.

3. Create an Age Category Checker.

4. Create an Employee Bonus Calculator.

5. Create a Bus Fare Calculator.
*/

// Solution

// Task 1

$marks = 85;

if ($marks >= 80) {
    echo "Task 1: Grade A+" . PHP_EOL;
} 
elseif ($marks >= 70) {
    echo "Task 1: Grade A" . PHP_EOL;
} 
elseif ($marks >= 60) {
    echo "Task 1: Grade A-" . PHP_EOL;
} 
elseif ($marks >= 50) {
    echo "Task 1: Grade B" . PHP_EOL;
} 
elseif ($marks >= 40) {
    echo "Task 1: Grade C" . PHP_EOL;
} 
elseif ($marks >= 33) {
    echo "Task 1: Grade D" . PHP_EOL;
} 
else {
    echo "Task 1: Grade F" . PHP_EOL;
}

echo PHP_EOL;


// Task 2

$bmi = 27;

if ($bmi < 18.5) {
    echo "Task 2: Underweight" . PHP_EOL;
} 
elseif ($bmi < 25) {
    echo "Task 2: Normal" . PHP_EOL;
} 
elseif ($bmi < 30) {
    echo "Task 2: Overweight" . PHP_EOL;
} 
else {
    echo "Task 2: Obese" . PHP_EOL;
}

echo PHP_EOL;

// Task 3

$age = (int) readline("Enter your age: ");

if ($age >= 0 && $age <= 12) {
    echo "Child";
} 
elseif ($age >= 13 && $age <= 19) {
    echo "Teenager";
} 
elseif ($age >= 20 && $age <= 59) {
    echo "Adult";
} 
elseif ($age >= 60) {
    echo "Senior Citizen";
}
 else {
    echo "Invalid Age";
}


// Task 4

$salary = 45000;

if ($salary >= 50000) {
    echo "Task 3: Bonus = 10000" . PHP_EOL;
} 
elseif ($salary >= 30000) {
    echo "Task 3: Bonus = 5000" . PHP_EOL;
} 
else {
    echo "Task 3: Bonus = 2000" . PHP_EOL;
}

// Task 5

$age = (int) readline("Enter your age: ");

if ($age < 0) {
    echo "Invalid Age";
} 
elseif ($age < 5) {
    echo "Fare: Free";
} 
elseif ($age <= 12) {
    echo "Fare: 50 Taka";
} 
elseif ($age <= 60) {
    echo "Fare: 100 Taka";
} 
else {
    echo "Fare: 60 Taka";
}