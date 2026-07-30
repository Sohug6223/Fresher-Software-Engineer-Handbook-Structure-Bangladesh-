<?php

/*

 Explode and Implode

 explode() converts a string into an array.

 implode() converts an array into a string.

*/

echo "Example 1" . PHP_EOL;

// explode() -> Split a string by comma

$text = "PHP,Laravel,MySQL";

$result = explode(",", $text);

print_r($result);

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// explode() -> Split a sentence by space

$text = "I Love PHP";

$result = explode(" ", $text);

print_r($result);

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// explode() -> Split date

$date = "2026-07-30";

$result = explode("-", $date);

print_r($result);

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// explode() -> Split file path

$path = "images/profile/photo.jpg";

$result = explode("/", $path);

print_r($result);

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// implode() -> Join array with comma

$languages = ["PHP", "Laravel", "MySQL"];

echo implode(", ", $languages) . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// implode() -> Join array with dash

$numbers = [10, 20, 30, 40];

echo implode("-", $numbers) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// implode() -> Create file path

$folders = ["images", "profile", "photo.jpg"];

echo implode("/", $folders) . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// explode() + Count values

$text = "HTML,CSS,JavaScript,PHP";

$result = explode(",", $text);

echo count($result) . PHP_EOL;

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// explode() + foreach()

$students = "Sohug,Rahim,Karim,Sakib";

$result = explode(",", $students);

foreach ($result as $student) {
    echo $student . PHP_EOL;
}

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example -> Tags

$tags = "php,laravel,mysql,api";

$tagArray = explode(",", $tags);

echo "Tags" . PHP_EOL;

foreach ($tagArray as $tag) {
    echo "- " . $tag . PHP_EOL;
}

echo PHP_EOL;

echo "Joined Again:" . PHP_EOL;

echo implode(" | ", $tagArray) . PHP_EOL;

echo PHP_EOL;