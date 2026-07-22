<?php
/*
PHP Null Coalescing Operator(??)

used in Laravel,PHP Framework, API Development, Form Handling.
*/

// Basic Example

/*
If $name is NULL,

PHP returns

"Guest"
*/

echo "Basic Example". PHP_EOL;

$name = null;
$result = $name ?? "Guest";

echo $result . PHP_EOL;
echo PHP_EOL;

// Value Exists

/*
Since $name is NOT NULL,

PHP returns

Sohug
*/

echo "Value Exists" . PHP_EOL;

$name = "Sohug";
echo $name ?? "Guest";
echo PHP_EOL;

// Multiple Null Coalescing
/*
PHP checks from left to right.

Returns the first NON-NULL value.
*/

echo "Multiple Values" . PHP_EOL;

$firstName = null;
$nickName = null;
$userName = "Sohug";

echo $firstName ?? $nickName ?? $userName ?? "Guest";

echo PHP_EOL;
echo PHP_EOL;

//Null Coalescing Assignment (??=)

/*
Same as

if ($country == null)
{
$country = "Bangladesh";
}
*/

echo "Null Coalescing Assignment " . PHP_EOL;

$country = null;

$country ??= "Bangladesh";

echo $country . PHP_EOL;

echo PHP_EOL;

// Example 1

echo "User Profile" . PHP_EOL;

$bio = null;

echo $bio ?? "No Bio Added";

echo PHP_EOL;
echo PHP_EOL;


// Example 2

echo "Student Department".PHP_EOL;

$department = null;

echo $department ?? "Not Assigned";

echo PHP_EOL;

// Example 3

echo "User Role" . PHP_EOL;

$role = "Student";

echo $role ?? "Guest";

echo PHP_EOL;
echo PHP_EOL;


