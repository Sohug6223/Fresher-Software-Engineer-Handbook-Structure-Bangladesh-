<?php

/*

 Substring

 PHP provides several functions to extract and modify parts of a string.

*/

echo "Example 1" . PHP_EOL;

// substr() -> Extract from index

$text = "Hello PHP";

echo substr($text, 6) . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// substr() -> Extract with length

$text = "Hello PHP";

echo substr($text, 0, 5) . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// substr() -> Last characters

$text = "Programming";

echo substr($text, -3) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// substr() -> Remove last characters

$text = "Programming";

echo substr($text, 0, -3) . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// substr_replace() -> Replace part of a string

$text = "Hello PHP";

echo substr_replace($text, "Laravel", 6) . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// substr_replace() -> Replace specific length

$text = "Hello PHP";

echo substr_replace($text, "Java", 6, 3) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// Extract file extension

$file = "photo.jpg";

echo substr($file, -3) . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Extract year from date

$date = "2026-07-30";

echo substr($date, 0, 4) . PHP_EOL;

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// Extract last four digits

$phone = "01712345678";

echo substr($phone, -4) . PHP_EOL;

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example -> Mask phone number

$phone = "01712345678";

echo substr($phone, 0, 3) . "******" . substr($phone, -2) . PHP_EOL;

echo PHP_EOL;
