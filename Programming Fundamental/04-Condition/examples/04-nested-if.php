<?php

/*
PHP Nested if Statement

A Nested if means an if statement inside another if statement.

It is used when a second condition
should be checked only if
the first condition is TRUE.

Syntax

if (condition1) {

    if (condition2) {

        // code

    }

}

*/

// Example 1

echo "Example 1" . PHP_EOL;

$age = 20;
$hasNID = true;

if ($age >= 18) {

    if ($hasNID) {

        echo "You can vote.";
      }
}

echo PHP_EOL;
echo PHP_EOL;

// Example 2

echo "Example 2" . PHP_EOL;

$username = "admin";
$password = "123456";

if ($username == "admin") {

    if ($password == "123456") {

        echo "Login Successful.";
      }
}
echo PHP_EOL;
echo PHP_EOL;

// Example 3

echo "Example 3" . PHP_EOL;

$cgpa = 3.90;
$attendance = 85;

if ($cgpa >= 3.75) {

    if ($attendance >= 80) {
      echo "Scholarship Approved.";
    }
}

echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$balance = 10000;
$withdraw = 5000;

if ($balance >= $withdraw) {

    if ($withdraw <= 20000) {
      echo "Transaction Successful.";
    }
}

echo PHP_EOL;
echo PHP_EOL;

// Example 5


echo "Example 5" . PHP_EOL;

$isLoggedIn = true;
$isAdmin = true;

if ($isLoggedIn) {

    if ($isAdmin) {

        echo "Welcome Admin.";
      }
  }

echo PHP_EOL;
echo PHP_EOL;
