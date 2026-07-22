<?php

/*
1. Create a Movie Ticket Price Calculator.

2. Create an Electricity Bill Calculator.

3. Create a Restaurant Discount Calculator.

4. Create a Library Fine Calculator.

5. Create an Online Shopping Discount System.
*/

//Solution

// Task 1

$age = (int) readline("Enter Age: ");

if ($age < 5) {
    echo "Ticket Price: Free";
} 
elseif ($age <= 12) {
    echo "Ticket Price: 100 Taka";
} 
elseif ($age <= 60) {
    echo "Ticket Price: 200 Taka";
} 
else {
    echo "Ticket Price: 150 Taka";
}

// Task 2

$units = (int) readline("Enter Units: ");

if ($units <= 100) {
    $bill = $units * 5;
} 
elseif ($units <= 300) {
    $bill = $units * 7;
} 
else {
    $bill = $units * 10;
}

echo "Bill: {$bill} Taka";

// Task 3

$bill = (int) readline("Enter Bill Amount: ");

if ($bill >= 5000) {
    echo "Discount: 20%";
} 
elseif ($bill >= 3000) {
    echo "Discount: 10%";
} 
else {
    echo "Discount: No Discount";
}

// Task 4

$days = (int) readline("Enter Late Days: ");

if ($days == 0) {
    echo "No Fine";
} 
elseif ($days <= 5) {
    $fine = $days * 10;
    echo "Fine: {$fine} Taka";
} 
elseif ($days <= 10) {
    $fine = $days * 20;
    echo "Fine: {$fine} Taka";
} 
else {
    echo "Membership Suspended";
}

// Task 5

$isPremium = true;
$amount = 5000;

if ($isPremium || $amount >= 10000) {
    echo "15% Discount Applied";
} 
else {
    echo "No Discount";
}