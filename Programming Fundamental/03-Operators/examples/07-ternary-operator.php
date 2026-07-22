<?php

/*
PHP Ternary Operator

The Ternary Operator is a shorthand version of if...else.

Operator:

? :

Syntax:

(condition) ? true_value : false_value;

*/

// Basic Example

echo "Basic Example". PHP_EOL;

$age = 20;

$result = ($age >= 18) ? "Adult" : "Minor";

echo $result . PHP_EOL;
echo PHP_EOL;

// Student Pass / Fail

echo "Pass / Fail". PHP_EOL;

$marks = 75;

$status = ($marks >= 33) ? "Pass" : "Fail";

echo $status . PHP_EOL;

echo PHP_EOL;

// Login Status

echo "Login Status" . PHP_EOL;

$isLoggedIn = true;

$message = ($isLoggedIn) ? "Welcome Back!" : "Please Login";

echo $message . PHP_EOL;

echo PHP_EOL;

// Even or Odd

echo "Even / Odd" . PHP_EOL;

$number = 15;

$result = ($number % 2 == 0) ? "Even" : "Odd";

echo $result . PHP_EOL;

echo PHP_EOL;

//Nested Ternary (Avoid)

echo "Nested Ternary" . PHP_EOL;

$marks = 85;

$result = ($marks >= 80)
    ? "A+"
    : (($marks >= 60) ? "A" : "B");

echo $result . PHP_EOL;

echo PHP_EOL;

/*
Nested Ternary works,

but it becomes difficult to read.

Prefer if...elseif...else for
complex conditions.
*/
  