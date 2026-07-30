<?php

/*

 String Comparison

 PHP provides several functions to compare two strings.

*/

echo "Example 1" . PHP_EOL;

// == -> Compare values

$text1 = "PHP";
$text2 = "PHP";

var_dump($text1 == $text2);

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// === -> Compare value and type

$text1 = "100";
$text2 = 100;

var_dump($text1 === $text2);

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// strcmp() -> Case-sensitive comparison

/*
0-> same string
Negative(<0) -> 1st string small
positive(>0) -> 1st string large 
*/

$text1 = "PHP";
$text2 = "php";

echo strcmp($text1, $text2) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// strcasecmp() -> Case-insensitive comparison

$text1 = "PHP";
$text2 = "php";

echo strcasecmp($text1, $text2) . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// strnatcmp() -> Natural order comparison

$file1 = "file2";
$file2 = "file10";

echo strnatcmp($file1, $file2) . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// Check if two strings are equal

$password = "php123";
$userInput = "php123";

if ($password == $userInput) {
    echo "Password Matched" . PHP_EOL;
} else {
    echo "Password Not Matched" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// Compare names (ignore case)

$name = "Sohug";
$input = "sohug";

if (strcasecmp($name, $input) == 0) {
    echo "Names are Same" . PHP_EOL;
} else {
    echo "Names are Different" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Compare email addresses

$email1 = "sohug@gmail.com";
$email2 = "sohug@gmail.com";

if ($email1 === $email2) {
    echo "Email Matched" . PHP_EOL;
} else {
    echo "Email Not Matched" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// Check file extension

$file = "photo.jpg";

if (str_ends_with($file, ".jpg")) {
    echo "JPG Image" . PHP_EOL;
} else {
    echo "Not a JPG Image" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example -> Username Verification

$registeredUsername = "Sohug";
$loginUsername = "SOHUG";

if (strcasecmp($registeredUsername, $loginUsername) == 0) {
    echo "Username Verified" . PHP_EOL;
} else {
    echo "Invalid Username" . PHP_EOL;
}

echo PHP_EOL;