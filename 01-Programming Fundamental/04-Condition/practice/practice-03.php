<?php

/*

1. Create a University Admission System.

2.Create a Login System

3. Create an ATM Withdrawal

4. Create a Scholarship Eligibility Checker.

5. Create a Driving License Eligibility Checker.

*/

// Solution

// Task 1

$gpa = 5.00;
$admissionTest = 85;

if ($gpa >= 5.00 && $admissionTest >= 80) {

    echo "Task 1: Admission Confirmed" . PHP_EOL;

} 
else {

    echo "Task 1: Admission Rejected" . PHP_EOL;

}

echo PHP_EOL;


// Task 2

$username = "admin";
$password = "123456";

if ($username == "admin" && $password == "123456") {

    echo "Task 2: Login Successful" . PHP_EOL;

}
else {

    echo "Task 2: Invalid Username or Password" . PHP_EOL;

}

echo PHP_EOL;


// Task 3

$balance = 10000;
$withdraw = 5000;

if ($balance >= $withdraw && $withdraw > 0) {

    echo "Task 3: Transaction Successful" . PHP_EOL;

} 
else {

    echo "Task 3: Transaction Failed" . PHP_EOL;

}

echo PHP_EOL;


// Task 4

$cgpa = 3.90;
$attendance = 90;

if ($cgpa >= 3.75 && $attendance >= 80) {

    echo "Task 4: Scholarship Approved" . PHP_EOL;

} 
else {

    echo "Task 4: Scholarship Rejected" . PHP_EOL;

}
echo PHP_EOL;

// Task 5

echo "Age: ";
$age = (int) readline();

echo "Has NID (true/false): ";
$hasNID = trim(readline());

if ($age >= 18 && $hasNID == "true") {
    echo "Eligible for Driving License";
} else {
    echo "Not Eligible";
}