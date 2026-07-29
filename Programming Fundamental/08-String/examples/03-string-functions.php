<?php

/*

 String Functions


 PHP provides many built-in functions
 to manipulate strings.

*/

echo "Example 1" . PHP_EOL;

// strlen()

$text = "Hello PHP";

echo "Text   : " . $text . PHP_EOL;
echo "Length : " . strlen($text) . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 2" . PHP_EOL;

// strtoupper()

$text = "hello php";

echo strtoupper($text) . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 3" . PHP_EOL;

// strtolower()

$text = "HELLO PHP";

echo strtolower($text) . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 4" . PHP_EOL;

// ucfirst()

$text = "php";

echo ucfirst($text) . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 5" . PHP_EOL;

// ucwords()

$text = "welcome to php programming";

echo ucwords($text) . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 6" . PHP_EOL;

// trim()

$text = "   Hello PHP   ";

echo "[" . trim($text) . "]" . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 7" . PHP_EOL;

// ltrim()

$text = "    PHP";

echo "[" . ltrim($text) . "]" . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 8" . PHP_EOL;

// rtrim()

$text = "PHP     ";

echo "[" . rtrim($text) . "]" . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 9" . PHP_EOL;

// str_word_count()

$text = "PHP is a powerful language";

echo str_word_count($text) . PHP_EOL;

echo PHP_EOL;

//-----------------------------------------------------

echo "Example 10" . PHP_EOL;

// str_repeat()

echo str_repeat("*", 20) . PHP_EOL;

echo PHP_EOL;