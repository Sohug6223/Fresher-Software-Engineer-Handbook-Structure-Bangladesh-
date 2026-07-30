<?php

/*

Practice 02 - Search, Replace and Substring

Task 1

Find the position of PHP inside a string.

Hint:

strpos()


Task 2

Find the position of php (ignore case).

Hint:

stripos()


Task 3

Check whether a string contains

Laravel

Hint:

str_contains()


Task 4

Replace PHP with Laravel

Hint:

str_replace()


Task 5

Replace php (ignore case) with Laravel

Hint:

str_ireplace()


Task 6

Extract the first 5 characters.

Hint:

substr()


Task 7

Extract the last 3 characters.

Hint:

substr()


Task 8

Count how many times PHP appears.

Hint:

substr_count()


Task 9

Check whether a string starts with https

Hint:

str_starts_with()


Task 10

Check whether a string ends with .com

Hint:

str_ends_with()

*/

//solution
/*

Practice 02 - Search, Replace and Substring
Solution

*/

// Task 1

$text = "I love PHP programming.";

echo "Task 1" . PHP_EOL;
echo "Position of PHP: " . strpos($text, "PHP") . PHP_EOL;

echo PHP_EOL;

// Task 2

$text = "I love PHP programming.";

echo "Task 2" . PHP_EOL;

$position = stripos($text, "php");

echo "Position of php: " . stripos($text, "php") . PHP_EOL;
echo PHP_EOL;

// Task 3

$text = "I am learning Laravel framework.";

echo "Task 3" . PHP_EOL;

if (str_contains($text, "Laravel")) {
    echo "Laravel found." . PHP_EOL;
} else {
    echo "Laravel not found." . PHP_EOL;
}

echo PHP_EOL;

// Task 4

$text = "PHP is a popular programming language.";

echo "Task 4" . PHP_EOL;
echo str_replace("PHP", "Laravel", $text) . PHP_EOL;

echo PHP_EOL;

// Task 5

$text = "php is easy. PHP is powerful.";

echo "Task 5" . PHP_EOL;
echo str_ireplace("php", "Laravel", $text) . PHP_EOL;

echo PHP_EOL;

// Task 6

$text = "Programming";

echo "Task 6" . PHP_EOL;
echo substr($text, 0, 5) . PHP_EOL;

echo PHP_EOL;

// Task 7

$text = "Programming";

echo "Task 7" . PHP_EOL;
echo substr($text, -3) . PHP_EOL;

echo PHP_EOL;

// Task 8

$text = "PHP is great. I love PHP because PHP is easy.";

echo "Task 8" . PHP_EOL;
echo "Total PHP: " . substr_count($text, "PHP") . PHP_EOL;

echo PHP_EOL;

// Task 9

$url = "https://www.google.com";

echo "Task 9" . PHP_EOL;

if (str_starts_with($url, "https")) {
    echo "Starts with https." . PHP_EOL;
} else {
    echo "Does not start with https." . PHP_EOL;
}

echo PHP_EOL;

// Task 10

$url = "https://www.google.com";

echo "Task 10" . PHP_EOL;

if (str_ends_with($url, ".com")) {
    echo "Ends with .com." . PHP_EOL;
} else {
    echo "Does not end with .com." . PHP_EOL;
}

echo PHP_EOL;