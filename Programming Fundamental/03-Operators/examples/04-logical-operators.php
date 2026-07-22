<?php
/*
PHP Logical Operators

LogicaL operators are used to combine multiple conditions.

The result is always:

true
or
false

Operators:

&&   (AND)
||   (OR)
!    (NOT)
and
or
xor
*/

//AND(&&) -> Both condition mustbe True

echo "AND (&&)".PHP_EOL;

$age = 20;
$hasNID = true;

var_dump($age>=18 && $hasNID);
echo PHP_EOL;

//OR(||) -> At least one condition must be true

echo "OR(||)".PHP_EOL;
$isAdmin = false;
$isManager = true;

var_dump($isAdmin || $isManager);
echo PHP_EOL;

// NOT(!) -> Reverses the result  true -> false,  false -> true

echo "Not(!)".PHP_EOL;
$isLoggedIn = false;
var_dump(!$isLoggedIn);
echo PHP_EOL;

/* Be careful!
Because "and" has lower precedence than "=".
*/

echo "and".PHP_EOL;
$result = true and false;
var_dump($result);
echo PHP_EOL;

// same issue as "and"

echo "or".PHP_EOL;
$result = false or true;
var_dump($result);
echo PHP_EOL;

//XOR returns TRUE only when exactly one condition is TRUE.

echo "xor".PHP_EOL;
var_dump(true xor false);
var_dump(true xor true);

//Example 1

echo "Login".PHP_EOL;
$email = true;
$password = true;

var_dump($email && $password);
echo PHP_EOL;

// Example 2 
echo "Dashboard Access".PHP_EOL;

$isAdmin = false;
$isTeacher = true;

var_dump($isAdmin || $isTeacher);
echo PHP_EOL;

//Example 3
echo "Account Status".PHP_EOL;
$isBlocked = false;
var_dump(!$isBlocked);
echo PHP_EOL;

//operator precedence
echo "&& vs and" . PHP_EOL;

$a = true && false;
$b = true and false;

var_dump($a);
var_dump($b);

echo PHP_EOL;

/*
php check "=" first then check true and false
 */