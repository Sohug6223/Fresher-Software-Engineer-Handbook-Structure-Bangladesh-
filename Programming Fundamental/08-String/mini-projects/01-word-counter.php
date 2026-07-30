<?php

/*

Mini Project 01 - Word Counter

Features

- Enter a Sentence
- Count Total Characters
- Count Total Words
- Convert to Uppercase
- Convert to Lowercase
- Capitalize First Letter
- Capitalize Every Word

*/

define("PROJECT_TITLE", "WORD COUNTER");

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;
echo PHP_EOL;

// User Input

$text = trim(readline("Enter a Sentence: "));

// Validation

if ($text == "") {

    echo PHP_EOL;
    echo "Sentence cannot be empty." . PHP_EOL;

    exit;
}

echo PHP_EOL;

echo "RESULT" . PHP_EOL;
echo str_repeat("-", 30) . PHP_EOL;

echo "Sentence        : " . $text . PHP_EOL;
echo "Characters      : " . strlen($text) . PHP_EOL;
echo "Words           : " . str_word_count($text) . PHP_EOL;
echo "Uppercase       : " . strtoupper($text) . PHP_EOL;
echo "Lowercase       : " . strtolower($text) . PHP_EOL;
echo "First Letter    : " . ucfirst($text) . PHP_EOL;
echo "Every Word      : " . ucwords($text) . PHP_EOL;

echo PHP_EOL;

echo "Thank you for using " . PROJECT_TITLE . "." . PHP_EOL;

echo PHP_EOL;