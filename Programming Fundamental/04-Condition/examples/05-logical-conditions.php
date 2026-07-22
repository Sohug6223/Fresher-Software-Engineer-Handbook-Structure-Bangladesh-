<?php

/*

PHP Logical Conditions

Logical Operators are used to combine multiple conditions.

PHP Logical Operators

&&   AND

||   OR

!    NOT

*/

// Example 1 (AND)

echo "Example 1 : AND (&&)" . PHP_EOL;

$age = 20;
$hasNID = true;

if ($age >= 18 && $hasNID) {

    echo "Eligible to Vote.";
    
  }

echo PHP_EOL;
echo PHP_EOL;

// Example 2 (AND)

echo "Example 2" . PHP_EOL;

$username = "admin";
$password = "123456";

if ($username == "admin" && $password == "123456") {

    echo "Login Successful.";
}

echo PHP_EOL;
echo PHP_EOL;

// Example 3 (OR)

echo "Example 3 : OR (||)" . PHP_EOL;

$isAdmin = false;
$isTeacher = true;

if ($isAdmin || $isTeacher) {

    echo "Dashboard Access Granted.";

}

echo PHP_EOL;
echo PHP_EOL;

// Example 4 (NOT)

echo "Example 4 : NOT (!)" .PHP_EOL;

$isBlocked = false;

if (!$isBlocked) {

    echo "User Can Login.";

}

echo PHP_EOL;
echo PHP_EOL;

// Example 5

echo "Example 5" . PHP_EOL;

$cgpa = 3.90;
$attendance = 85;

if ($cgpa >= 3.75 && $attendance >= 80) {

    echo "Scholarship Approved.";

}

echo PHP_EOL;
echo PHP_EOL;

/*

Truth Table

AND (&&)

TRUE  && TRUE  = TRUE

TRUE  && FALSE = FALSE

FALSE && TRUE  = FALSE

FALSE && FALSE = FALSE


OR (||)

TRUE  || TRUE  = TRUE

TRUE  || FALSE = TRUE

FALSE || TRUE  = TRUE

FALSE || FALSE = FALSE


NOT (!)

!TRUE  = FALSE

!FALSE = TRUE

*/
