<?php

/*
Practice 4

Task 1
Create a numeric string.
Add 20 to it.
Print the result.

Task 2
Create a boolean variable.
Add 5 to it.
Print the result.

Task 3
Compare
"50" == 50 and "50" === 50
Print both results using var_dump().
*/

//Task 1

$number = "30";
$result = $number + 20;
echo "Task 1 Result: ". $result . PHP_EOL;

// Task 2

$isStudent = true;
$result = $isStudent + 5;
echo "Task 2 Result: " . $result . PHP_EOL;

//Task 3 
echo "Task 3:".PHP_EOL;
var_dump("50" == 50); //Loose Comparison (only value)
var_dump("50" === 50); //Strict Comparison (value+type)