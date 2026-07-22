<?php

/*
PHP String Operators

String Operators are used to join
or append strings.

Operators:
.
.=

*/

// Concatenation (.)


echo "Concatenation (.)" . PHP_EOL;

$firstName = "Sohug";
$lastName = "mia";

$fullName = $firstName . " " . $lastName;

echo "Full Name: " . $fullName . PHP_EOL;

echo PHP_EOL;

// Join two or more strings.

// Concatenation Assignment (.=)

echo "Concatenation Assignment (.=)" . PHP_EOL;

$message = "Welcome";

$message .= " to";
$message .= " PHP";
$message .= " Programming";

echo $message . PHP_EOL;

echo PHP_EOL;

/*
Interpolation vs Concatenation
*/

$name = "Sohug";
$age = 23;

echo "Interpolation:" . PHP_EOL;
echo "Name: $name" . PHP_EOL;

echo PHP_EOL;

echo "Concatenation:" . PHP_EOL;
echo "Name: " . $name . PHP_EOL;

echo PHP_EOL;

