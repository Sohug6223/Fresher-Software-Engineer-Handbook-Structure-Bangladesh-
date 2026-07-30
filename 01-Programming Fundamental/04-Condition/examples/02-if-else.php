<?php

/*
PHP if...else Statement

The if...else statement executes one block of code if the condition is TRUE,

otherwise,

it executes another block.

Syntax

if (condition) {

    // TRUE block

} else {

    // FALSE block

}
*/

// Example 1

echo "Example 1" . PHP_EOL;

$age = 16;

if ($age >= 18) {

    echo "You are eligible to vote.";
    }
  
    else {

    echo "You are not eligible to vote.";
    }

echo PHP_EOL;
echo PHP_EOL;

// Example 2
echo "Example 2" . PHP_EOL;

$marks = 75;

if ($marks >= 33) {

    echo "Congratulations! You Passed.";
}
 else {

    echo "Sorry! You Failed.";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 3
echo "Example 3" . PHP_EOL;

$isLoggedIn = false;

if ($isLoggedIn) {
  echo "Welcome Back.";
}
 else {
  echo "Please Login First.";
  }
echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$balance = 500;

if ($balance >= 1000) {

    echo "Withdrawal Successful.";

} 
else {

    echo "Insufficient Balance.";
}
echo PHP_EOL;
echo PHP_EOL;

// Example 5

echo "Example 5" . PHP_EOL;
$totalPurchase = 1500;
if ($totalPurchase >= 2000) {
  echo "Free Delivery.";
  } 
  else {
    echo "Delivery Charge: 60 Tk.";
    }

echo PHP_EOL;
echo PHP_EOL;

