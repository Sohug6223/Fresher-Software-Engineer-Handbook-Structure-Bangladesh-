<?php

/*
FOR LOOP

Definition

A for loop is used when we know
how many times a block of code
should be executed.

In simple words,

Use a for loop when the number of
iterations is known.

Syntax

for (initialization; condition; increment/decrement) {

    // code

}

Syntax Breakdown

Initialization

Runs only once before the loop starts.

Condition

Checked before every iteration.

If true,
the loop continues.

If false,
the loop stops.

Increment / Decrement

Runs after every iteration.

It updates the loop variable.

*/

// Example 1
// Print Numbers 1 to 5

echo "Example 1" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {

    echo $i . PHP_EOL;

}

echo PHP_EOL;

// Example 2
// Print Even Numbers

echo "Example 2" . PHP_EOL;

for ($i = 2; $i <= 10; $i += 2) {

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Example 3
// Countdown

echo "Example 3" . PHP_EOL;

for ($i = 5; $i >= 1; $i--) {

    echo $i . PHP_EOL;

}

echo PHP_EOL;
