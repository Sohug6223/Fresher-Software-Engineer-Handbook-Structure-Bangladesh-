<?php

/*

1. Create a Day Information System.

2. Create a User Dashboard System.

3. Create a Student Status Checker.

4. Create a User Profile Viewer.

5. Create a Season Finder.
*/


// Solution

// Task 1

$day = "Friday";

switch ($day) {

    case "Monday":
        echo "Task 1: Start Working";
        break;

    case "Friday":
        echo "Task 1: Weekend is Coming";
        break;

    case "Sunday":
        echo "Task 1: Holiday";
        break;

    default:
        echo "Task 1: Normal Day";
}

echo PHP_EOL;
echo PHP_EOL;


// Task 2

$role = "Teacher";

$result = match ($role) {

    "Admin"   => "Full Access",

    "Teacher" => "Teacher Dashboard",

    "Student" => "Student Dashboard",

    default   => "Guest"

};

echo "Task 2: $result";

echo PHP_EOL;
echo PHP_EOL;


// Task 3

$marks = 70;

$result = ($marks >= 33)
    ? "Pass"
    : "Fail";

echo "Task 3: $result";

echo PHP_EOL;
echo PHP_EOL;


// Task 4

$email = null;

echo "Task 4: " . ($email ?? "No Email");

echo PHP_EOL;

// Task 5

$month = (int) readline("Enter month (1-12): ");

$season = match ($month) {
    12, 1, 2 => "Winter",
    3, 4, 5 => "Summer",
    6, 7, 8 => "Rainy",
    9, 10, 11 => "Autumn",
    default => "Invalid Month",
};

echo $season;