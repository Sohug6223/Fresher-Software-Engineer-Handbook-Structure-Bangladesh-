<?php

/*
WHILE LOOP

Definition

A while loop executes a block of code
as long as the specified condition is true.

In simple words,

The loop continues until the condition
becomes false.

Syntax

while (condition) {

    // code

}

Syntax Breakdown

Condition

Checked before every iteration.

If true,

The loop executes.

If false,

The loop stops.

Note

Don't forget to update the loop variable.

Otherwise,

The loop will become an infinite loop.

*/

// Example 1
// Print Numbers 1 to 5

echo "Example 1" . PHP_EOL;

$i = 1;

while ($i <= 5) {

    echo $i . PHP_EOL;

    $i++;
}

echo PHP_EOL;

// Example 2
// Print Even Numbers

echo "Example 2" . PHP_EOL;

$i = 2;

while ($i <= 10) {

    echo $i . PHP_EOL;

    $i += 2;
}

echo PHP_EOL;

// Example 3
// Countdown

echo "Example 3" . PHP_EOL;

$i = 5;

while ($i >= 1) {

    echo $i . PHP_EOL;

    $i--;
}

echo PHP_EOL;


/*

Common Mistake

$i = 1;

while ($i <= 5) {

    echo $i;

}

Problem

The value of $i never changes.

Result

Infinite Loop

*/