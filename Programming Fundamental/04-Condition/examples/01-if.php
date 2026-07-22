<?php

/*

PHP if Statement

The if statement executes a block of code ONLY when the condition is TRUE.

Syntax

if (condition) {

    // code
}
*/

// Example 1

echo "Example 1" . PHP_EOL;

$age = 20;

if ($age >= 18) {
  echo "You are eligible to vote.";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 2

echo "Example 2" . PHP_EOL;

$marks = 80;

if ($marks >= 33) {

    echo "You Passed.";
}
echo PHP_EOL;
echo PHP_EOL;

// Example 3

echo "Example 3". PHP_EOL;

$isLoggedIn = true;

if ($isLoggedIn) {

  echo "Welcome Back.";
}
echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4". PHP_EOL;

$balance = 5000;

if ($balance >= 1000) {
  echo "Withdrawal Allowed.";
}
echo PHP_EOL;
echo PHP_EOL;

// Example 5

echo "Example 5" . PHP_EOL;

$cgpa = 3.80;

if ($cgpa >= 3.75) {

    echo "Eligible for Scholarship.";
  }

echo PHP_EOL;
echo PHP_EOL;

// Example 6

echo " Online Shopping" . PHP_EOL;

$totalPurchase = 2500;

if ($totalPurchase >= 2000) {

    echo "Free Delivery.";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 7

echo "Banking" . PHP_EOL;

$balance = 10000;

if ($balance >= 5000) {

    echo "Premium Customer.";
}

echo PHP_EOL;
echo PHP_EOL;
