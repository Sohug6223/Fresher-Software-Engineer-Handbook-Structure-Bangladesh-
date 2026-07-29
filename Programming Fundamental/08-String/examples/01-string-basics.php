<?php

/*
 String Basics

 A string is a sequence of characters.
 Strings are enclosed in single quotes (' ')
 or double quotes (" ").

*/

echo "Example 1" . PHP_EOL;

// Double Quotes

$name = "Sohug";

echo $name . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// Single Quotes

$language = 'PHP';

echo $language . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Numbers Stored as String

$age = "22";

echo $age . PHP_EOL;

echo gettype($age) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Empty String

$message = "";

echo $message . PHP_EOL;

echo "Length: " . strlen($message) . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// String with Spaces

$city = "Dhaka Bangladesh";

echo $city . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// Escape Characters

echo "I'm learning PHP." . PHP_EOL;

echo "He said, \"PHP is awesome!\"" . PHP_EOL;

echo "C:\\xampp\\htdocs" . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// New Line

echo "Hello\nPHP" . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Tab

echo "Name\tDepartment\tCGPA" . PHP_EOL;
echo "Sohug\tCSE\t\t3.85" . PHP_EOL;

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// Difference Between Single and Double Quotes

$name = "Sohug";

echo "Double Quotes: Hello $name" . PHP_EOL;
echo 'Single Quotes: Hello $name' . PHP_EOL;

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// String Length

$text = "Hello PHP";

echo $text . PHP_EOL;
echo "Length: " . strlen($text) . PHP_EOL;

echo PHP_EOL;