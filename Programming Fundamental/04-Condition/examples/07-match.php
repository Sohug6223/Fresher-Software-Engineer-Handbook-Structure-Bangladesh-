<?php

/*

PHP match Expression

The match expression compares one value against multiple possible values.

It is introduced in PHP 8.

Compared to switch,

match

 .Uses strict comparison (===)
 .Returns a value
 .Does not need break
 .Is shorter and safer

Syntax

$result = match ($value) {

    value1 => result1,

    value2 => result2,

    default => defaultResult

};

*/

// Example 1

echo "Example 1" . PHP_EOL;

$day = "Monday";

$message = match ($day) {

    "Monday" => "Start of the Week",

    "Friday" => "Weekend is Coming",

    "Sunday" => "Holiday",

    default => "Normal Day"

};

echo $message;

echo PHP_EOL;
echo PHP_EOL;

// Example 2

echo "Example 2" . PHP_EOL;

$role = "Teacher";

$dashboard = match ($role) {

    "Admin" => "Admin Dashboard",

    "Teacher" => "Teacher Dashboard",

    "Student" => "Student Dashboard",

    default => "Guest Dashboard"

};

echo $dashboard;

echo PHP_EOL;
echo PHP_EOL;

// Example 3

echo "Example 3" . PHP_EOL;

$status = "Paid";

$message = match ($status) {

    "Pending" => "Waiting for Payment",

    "Paid" => "Order Confirmed",

    "Cancelled" => "Order Cancelled",

    default => "Unknown Status"

};

echo $message;

echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$marks = "80";

$result = match ($marks) {

    80 => "Excellent",

    default => "No Match"

};

echo $result;

echo PHP_EOL;
echo PHP_EOL;


/*
Notice

Match uses

===

Strict Comparison

"80" !== 80

So,

Output

No Match

*/



// Example 5

echo "Example 5" . PHP_EOL;

$month = 12;

$season = match ($month) {

    12, 1, 2 => "Winter",

    3, 4, 5 => "Summer",

    6, 7, 8 => "Rainy",

    9, 10, 11 => "Autumn"

};

echo $season;

echo PHP_EOL;
echo PHP_EOL;


// Membership

echo "Membership" . PHP_EOL;

$points = 800;

echo match (true) {

    $points >= 1000 => "Platinum",

    $points >= 500 => "Gold",

    $points >= 200 => "Silver",

    default => "Bronze"

};

echo PHP_EOL;
echo PHP_EOL;


/*

switch vs match


switch

. break required

. Loose Comparison (==)

. Doesn't return value directly


match

. No break

. Strict Comparison (===)

. Returns value

. Cleaner

*/


