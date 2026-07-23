<?php

/*

BREAK STATEMENT


Definition

The break statement is used to
immediately terminate a loop.

In simple words,

When PHP finds a break statement,
it exits the loop immediately.

Syntax

break;

When to Use

Use break when you want to stop
the loop before it finishes naturally.

Examples

- Stop searching after finding a result.
- Exit a menu.
- Stop processing invalid data.
- Exit an infinite loop safely.

*/

// Example 1
// Stop at 5

echo "Example 1" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        break;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Example 2
// Stop at First Even Number
// ==========================================

echo "Example 2" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {

    if ($i % 2 == 0) {
        break;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Example 3
// while Loop with break

echo "Example 3" . PHP_EOL;

$i = 1;

while (true) {

    echo $i . PHP_EOL;

    if ($i == 5) {
        break;
    }

    $i++;
}

echo PHP_EOL;
