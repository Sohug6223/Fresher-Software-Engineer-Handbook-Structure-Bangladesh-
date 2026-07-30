<?php

/*

Mixed Challenge

Task 1

Age = 20
Use Ternary Operator

Print - Adult or Minor

Task 2

$name = null

Print Guest using

Null Coalescing Operator.

Task 3

Predict the Output

10 + 5 * 2

Task 4

Predict the Output

(10 + 5) * 2

*/

// Solution

// Task 1

$age = 20;

echo ($age >= 18) ? "Adult" : "Minor";

echo PHP_EOL;


// Task 2

$name = null;

echo $name ?? "Guest";

echo PHP_EOL;


// Task 3

$result = 10 + 5 * 2;

echo $result;

echo PHP_EOL;


// Task 4

$result = (10 + 5) * 2;

echo $result;

echo PHP_EOL;