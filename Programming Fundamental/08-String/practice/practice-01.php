<?php

/*

Practice 01 - String Basics

Task 1

Create a string variable.

Print the string.


Task 2

Find the length of a string.

Hint:

strlen()


Task 3

Convert a string to uppercase.

Hint:

strtoupper()


Task 4

Convert a string to lowercase.

Hint:

strtolower()


Task 5

Capitalize the first letter.

Hint:

ucfirst()


Task 6

Capitalize the first letter of each word.

Hint:

ucwords()


Task 7

Remove extra spaces from both sides.

Hint:

trim()


Task 8

Count the total words in a string.

Hint:

str_word_count()


Task 9

Repeat a character 10 times.

Hint:

str_repeat()


Task 10

Print a line using 20 equal signs.

Hint:

str_repeat("=", 20)

*/

// Solution

// Task 1

$message = "Welcome to PHP Strings!";

echo "Task 1" . PHP_EOL;
echo $message . PHP_EOL;

echo PHP_EOL;

// Task 2

echo "Task 2" . PHP_EOL;
echo "Length: " . strlen($message) . PHP_EOL;

echo PHP_EOL;

// Task 3

echo "Task 3" . PHP_EOL;
echo strtoupper($message) . PHP_EOL;

echo PHP_EOL;

// Task 4

echo "Task 4" . PHP_EOL;
echo strtolower($message) . PHP_EOL;

echo PHP_EOL;

// Task 5

$text = "hello php";

echo "Task 5" . PHP_EOL;
echo ucfirst($text) . PHP_EOL;

echo PHP_EOL;

// Task 6

$text = "welcome to php programming";

echo "Task 6" . PHP_EOL;
echo ucwords($text) . PHP_EOL;

echo PHP_EOL;

// Task 7

$text = "     PHP is awesome!     ";

echo "Task 7" . PHP_EOL;
echo trim($text) . PHP_EOL;
//echo "[" . trim($text) . "]" . PHP_EOL;

echo PHP_EOL;

// Task 8

$text = "PHP is easy to learn";

echo "Task 8" . PHP_EOL;
echo "Total Words: " . str_word_count($text) . PHP_EOL;

echo PHP_EOL;


// Task 9

echo "Task 9" . PHP_EOL;
echo str_repeat("*", 10) . PHP_EOL;

echo PHP_EOL;

// Task 10

echo "Task 10" . PHP_EOL;
echo str_repeat("=", 20) . PHP_EOL;

echo PHP_EOL;