<?php

/*

NESTED LOOP

Definition

A nested loop is a loop inside another loop.

In simple words,

The inner loop executes completely
for every iteration of the outer loop.

Syntax

for (...) {

    for (...) {

        // code

    }

}

When to Use

Use nested loops when working with

- Patterns
- Tables
- Rows and Columns
- Matrix Operations
- 2D Arrays (Later)

*/

// Example 1
// Row and Column


echo "Example 1" . PHP_EOL;

for ($row = 1; $row <= 3; $row++) {

    for ($column = 1; $column <= 3; $column++) {

        echo "($row,$column) ";

    }

    echo PHP_EOL;

}

echo PHP_EOL;

// Example 2
// Multiplication Table (1 to 3)

echo "Example 2" . PHP_EOL;

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 10; $j++) {

        echo "$i x $j = " . ($i * $j) . PHP_EOL;

    }

    echo PHP_EOL;

}

echo PHP_EOL;

// Example 3
// Rectangle Pattern

echo "Example 3" . PHP_EOL;

for ($row = 1; $row <= 4; $row++) {

    for ($column = 1; $column <= 5; $column++) {

        echo "* ";

    }

    echo PHP_EOL;

}

echo PHP_EOL;
