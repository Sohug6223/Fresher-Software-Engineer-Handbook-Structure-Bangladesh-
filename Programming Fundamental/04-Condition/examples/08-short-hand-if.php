<?php

/*

PHP Short-hand if


Short-hand if is a shorter way
to write simple conditional statements.

PHP provides

1. Ternary Operator (?:)

2. Null Coalescing Operator (??)

3. Null Coalescing Assignment (??=)

*/

// Example 1
// Ternary Operator

echo "Example 1" . PHP_EOL;

$age = 20;

$message = ($age >= 18)
    ? "Adult"
    : "Minor";

echo $message;

echo PHP_EOL;
echo PHP_EOL;

// Example 2

echo "Example 2" . PHP_EOL;

$marks = 28;

$result = ($marks >= 33)
    ? "Pass"
    : "Fail";

echo $result;

echo PHP_EOL;
echo PHP_EOL;

// Example 3
// Null Coalescing

echo "Example 3" . PHP_EOL;

$name = null;

echo $name ?? "Guest";

echo PHP_EOL;
echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$email = "sohug@example.com";

echo $email ?? "No Email";

echo PHP_EOL;
echo PHP_EOL;

// Example 5
// Null Coalescing Assignment

echo "Example 5" . PHP_EOL;

$country = null;

$country ??= "Bangladesh";

echo $country;

echo PHP_EOL;
echo PHP_EOL;


/*
Only assigns the value

if the variable is null.

*/

// Example 6

echo "Example 6" . PHP_EOL;

$isLoggedIn = true;

echo $isLoggedIn
    ? "Welcome Back"
    : "Please Login";

echo PHP_EOL;
echo PHP_EOL;


/*
Traditional if...else

if ($age >= 18) {

    echo "Adult";

} else {

    echo "Minor";

}

↓

Short Version

echo ($age >= 18)
    ? "Adult"
    : "Minor";

*/


/*

Best Practices


. Use Ternary
only for simple conditions.

. Use ?? for default values.

. Avoid deeply nested ternary operators.

. Prefer normal if...else
for complex logic.

*/