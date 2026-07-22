<?php

/*
PHP Operator Precedence

Operator Precedence determines which operation PHP performs FIRST.

If multiple operators are used in
the same expression,
PHP follows precedence rules.
*/

// Example 1

echo "Example 1" . PHP_EOL;

$result = 10 + 5 * 2;

echo $result . PHP_EOL;

echo PHP_EOL;

// Example 2
echo "Example 2" . PHP_EOL;

$result = (10 + 5) * 2;

echo $result . PHP_EOL;

echo PHP_EOL;

// Example 3

echo "Example 3" . PHP_EOL;

$result = 100 / 5 + 2;

echo $result . PHP_EOL;

echo PHP_EOL;

// Example 4

echo "Example 4" . PHP_EOL;

$a = true && false;

$b = true and false;

var_dump($a);

var_dump($b);

echo PHP_EOL;

// Example 5

echo "Example 5" . PHP_EOL;

$x = 10;

echo $x++ + 5;

echo PHP_EOL;

echo $x;

echo PHP_EOL;

echo PHP_EOL;

// Example 6

echo "Example 6" . PHP_EOL;

$x = 10;

echo ++$x + 5;

echo PHP_EOL;

echo $x;

echo PHP_EOL;

echo PHP_EOL;


/*

Best Practice

Always use parentheses

when the expression becomes
complex.

Good

($price + $vat) * $quantity

Avoid

$price + $vat * $quantity

*/

