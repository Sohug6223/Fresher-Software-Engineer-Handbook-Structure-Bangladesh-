<?php

/*

CONTINUE STATEMENT

Definition

The continue statement is used to
skip the current iteration of a loop and move to the next iteration.

In simple words,

When PHP finds a continue statement,
it skips the remaining code of the
current iteration and starts the next one.

Syntax

continue;

When to Use

Use continue when you want to
skip specific values but keep
the loop running.

Examples

- Skip invalid records
- Ignore negative numbers
- Skip weekends
- Skip empty input values

*/

// Example 1
// Skip Number 5

echo "Example 1" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        continue;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Example 2
// Print Only Odd Numbers


echo "Example 2" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        continue;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Example 3
// Skip Multiples of 3

echo "Example 3" . PHP_EOL;

$i = 1;

while ($i <= 10) {

    if ($i % 3 == 0) {
        $i++;
        continue;
    }

    echo $i . PHP_EOL;

    $i++;
}

echo PHP_EOL;
