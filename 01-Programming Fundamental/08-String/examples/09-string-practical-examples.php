<?php

/*

 String Practical Examples

 This file contains simple real-world examples
 using PHP string functions.

*/

echo "Example 1" . PHP_EOL;

// Student Information

$name = "Sohug";
$department = "CSE";

echo "Name       : " . strtoupper($name) . PHP_EOL;
echo "Department : " . strtoupper($department) . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// Email Validation

$email = "sohug@gmail.com";

if (str_contains($email, "@")) {
    echo "Valid Email Format" . PHP_EOL;
} else {
    echo "Invalid Email Format" . PHP_EOL;
}

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Username Generator

$name = "Sohug Mia";

$username = strtolower(str_replace(" ", "", $name));

echo "Username : " . $username . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// File Extension

$file = "resume.pdf";

echo "Extension : " . substr($file, -3) . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// URL Slug

$title = "Learn PHP Programming";

$slug = strtolower(str_replace(" ", "-", $title));

echo $slug . PHP_EOL;

echo PHP_EOL;


echo "Example 6" . PHP_EOL;

// Phone Number Mask

$phone = "01712345678";

echo substr($phone, 0, 3) . "******" . substr($phone, -2) . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// File Path

$path = "images/profile/photo.jpg";

echo str_replace("/", "\\", $path) . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Tags

$tags = "PHP,Laravel,MySQL";

$tagArray = explode(",", $tags);

foreach ($tagArray as $tag) {
    echo "- " . $tag . PHP_EOL;
}

echo PHP_EOL;


echo "Example 9" . PHP_EOL;

// Build CSV

$languages = ["PHP", "Laravel", "MySQL"];

echo implode(", ", $languages) . PHP_EOL;

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Censor Bad Word

$comment = "This is a stupid comment.";

echo str_ireplace("stupid", "*****", $comment) . PHP_EOL;

echo PHP_EOL;

// real life example

// Input Data

$raw_name = "   SOHUG hossain   ";
$blog_title = "Learn PHP & Laravel Framework in 2026!";

$clean_name = trim($raw_name);
$clean_name = ucwords(strtolower($clean_name)); 

// --- SLUG GENERATOR PROCESS ---

function generateSlug(string $title): string {
    $slug = strtolower($title);                 
    $slug = str_replace("&", "and", $slug);        
    $slug = str_replace(["!", "?", "."], "", $slug); 
    $slug = str_replace(" ", "-", $slug);          
    return $slug;
}

$post_slug = generateSlug($blog_title);

echo "\n";
echo "      USER REGISTRATION & SLUG OUTPUT   \n";
echo "\n";
echo "Original Name Input: '{$raw_name}'\n";
echo "Sanitized Name:      '{$clean_name}'\n";
echo "\n";
echo "Original Blog Title: {$blog_title}\n";
echo "Generated URL Slug:  /posts/{$post_slug}\n";
echo "\n";