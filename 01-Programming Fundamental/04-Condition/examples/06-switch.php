<?php

/*
PHP switch Statement

The switch statement is used to compare one variable against multiple fixed values.

It is cleaner and easier to read than writing many else-if statements.

Syntax

switch (expression) {

    case value1:
        // code
        break;

    case value2:
        // code
        break;

    default:
        // code
}

*/

// Example 1

echo "Example 1 " . PHP_EOL;

$day = "Monday";

switch ($day) {

    case "Monday":
        echo "Start of the Week.";
        break;

    case "Friday":
        echo "Weekend is Coming.";
        break;

    case "Sunday":
        echo "Holiday.";
        break;

    default:
        echo "Normal Day.";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 2

echo "Example 2" . PHP_EOL;

$role = "Admin";

switch ($role) {

    case "Admin":
        echo "Full Access";
        break;

    case "Teacher":
        echo "Teacher Dashboard";
        break;

    case "Student":
        echo "Student Dashboard";
        break;

    default:
        echo "Access Denied";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 3

echo "Example 3" . PHP_EOL;

$signal = "Red";

switch ($signal) {

    case "Green":
        echo "Go";
        break;

    case "Yellow":
        echo "Wait";
        break;

    case "Red":
        echo "Stop";
        break;

    default:
        echo "Invalid Signal";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$paymentStatus = "Paid";

switch ($paymentStatus) {

    case "Pending":
        echo "Waiting for Payment";
        break;

    case "Paid":
        echo "Order Confirmed";
        break;

    case "Cancelled":
        echo "Order Cancelled";
        break;

    default:
        echo "Unknown Status";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 5

echo "Example 5" . PHP_EOL;

$option = 2;

switch ($option) {

    case 1:
        echo "Create Account";
        break;

    case 2:
        echo "Login";
        break;

    case 3:
        echo "Exit";
        break;

    default:
        echo "Invalid Option";
}

echo PHP_EOL;
echo PHP_EOL;


// Month

echo "Month" . PHP_EOL;

$month = 12;

switch ($month) {

    case 12:
    case 1:
    case 2:
        echo "Winter";
        break;

    case 3:
    case 4:
    case 5:
        echo "Summer";
        break;

    case 6:
    case 7:
    case 8:
        echo "Rainy Season";
        break;

    default:
        echo "Autumn";
}

echo PHP_EOL;
echo PHP_EOL;
