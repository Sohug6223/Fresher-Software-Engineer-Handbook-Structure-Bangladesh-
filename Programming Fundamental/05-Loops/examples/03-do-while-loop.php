<?php

/*
DO...WHILE LOOP

Definition

A do...while loop executes the code block at least once before checking the condition.

In simple words,

The code runs first,
then the condition is checked.

Syntax

do {

    // code

} while (condition);


Syntax Breakdown

do

The code inside the do block
is executed first.

Condition

The condition is checked
after each iteration.

If true,

The loop continues.

If false,

The loop stops.


When to Use

Use a do...while loop when
the code must execute at least once.

Examples

- Menu-driven programs
- User input validation
- Retry operations
- Password verification

*/

// Example 1
// Print Numbers 1 to 5

echo "Example 1" . PHP_EOL;

$i = 1;

do {

    echo $i . PHP_EOL;

    $i++;

} while ($i <= 5);

echo PHP_EOL;

// Example 2
// Countdown


echo "Example 2" . PHP_EOL;

$i = 5;

do {

    echo $i . PHP_EOL;

    $i--;

} while ($i >= 1);

echo PHP_EOL;

// Example 3
// Runs At Least Once


echo "Example 3" . PHP_EOL;

$i = 10;

do {

    echo "Current Value: $i" . PHP_EOL;

    $i++;

} while ($i <= 5);

echo PHP_EOL;



/* 


$i = 10;

while ($i <= 5) {

    echo $i;

}

Output

Nothing



$i = 10;

do {

    echo $i;

} while ($i <= 5);

Output

10



*/