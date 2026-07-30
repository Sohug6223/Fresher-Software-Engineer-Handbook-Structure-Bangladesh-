<?php

/*
 String Search

 PHP provides several functions to search text inside strings.

*/

echo "Example 1" . PHP_EOL;

// strpos() -> find word (index)

$text = "Hello PHP";

echo strpos($text, "PHP") . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// strpos() - Not Found

$text = "Hello PHP";

$result = strpos($text, "Laravel");

var_dump($result);

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// stripos() -> find one string inside another string (ignore case)

$text = "Hello PHP";

echo stripos($text, "php") . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// str_contains()

$text = "Learning PHP is fun.";

if (str_contains($text, "PHP")) {
    echo "PHP Found" . PHP_EOL;
} else {
    echo "PHP Not Found" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// substr() -> substring from a specific position

$text = "Hello PHP";

echo substr($text, 6) . PHP_EOL;

echo PHP_EOL;



echo "Example 6" . PHP_EOL;

// substr() with Length

$text = "Hello PHP";

echo substr($text, 0, 5) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// substr_count()

$text = "PHP PHP Laravel PHP";

echo substr_count($text, "PHP") . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;


// str_starts_with()-> Check string start

$text = "Laravel Framework";

if (str_starts_with($text, "Laravel")) {
    echo "Starts With Laravel" . PHP_EOL;
} else {
    echo "Does Not Start With Laravel" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// str_ends_with() ->Check string end

$text = "welcome@example.com";

if (str_ends_with($text, ".com")) {
    echo "Ends With .com" . PHP_EOL;
} else {
    echo "Does Not End With .com" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example

$email = "sohug@gmail.com";

if (str_contains($email, "@")) {
    echo "Valid Email Format" . PHP_EOL;
} else {
    echo "Invalid Email Format" . PHP_EOL;
}

echo PHP_EOL;



/*

 String Replace

 PHP provides functions to replace text inside strings.

*/

echo "Example 1" . PHP_EOL;

// str_replace() -> Replace a word

$text = "I Love PHP";

echo str_replace("PHP", "Laravel", $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// str_replace() -> Replace multiple words

$text = "PHP and JavaScript";

$search = ["PHP", "JavaScript"];
$replace = ["Laravel", "Vue.js"];

echo str_replace($search, $replace, $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// str_ireplace() -> Replace text (ignore case)

$text = "I Love php";

echo str_ireplace("PHP", "Laravel", $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// str_replace() -> Remove a word

$text = "Hello PHP World";

echo str_replace("PHP ", "", $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// str_replace() -> Remove spaces

$text = "P H P";

echo str_replace(" ", "", $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// str_replace() -> Replace spaces with hyphen

$text = "Learn PHP Programming";

echo str_replace(" ", "-", $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// str_replace() -> Replace comma with pipe

$text = "PHP,Laravel,MySQL";

echo str_replace(",", "  ", $text) . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Real-Life Example -> Mask email domain

$email = "sohug@gmail.com";

echo str_replace("@gmail.com", "@******.com", $email) . PHP_EOL;

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// Real-Life Example -> Convert file path

$path = "images/profile/photo.jpg";

echo str_replace("/", "\\", $path) . PHP_EOL;

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example -> Censor a word

$comment = "This is a stupid comment.";

echo str_ireplace("stupid", "*****", $comment) . PHP_EOL;

echo PHP_EOL;