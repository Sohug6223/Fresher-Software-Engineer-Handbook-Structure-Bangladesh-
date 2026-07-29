<?php

/*

 String Concatenation

 Concatenation means joining two or more strings together.

 PHP uses the dot (.) operator for concatenation.

*/

echo "Example 1" . PHP_EOL;

// Concatenate Two Strings

$firstName = "Sohug";
$lastName = "mia";

$fullName = $firstName . " " . $lastName;

echo $fullName . PHP_EOL;

echo PHP_EOL;


echo "Example 2" . PHP_EOL;

// Concatenate Multiple Strings

$city = "Dhaka";
$country = "Bangladesh";

echo $city . ", " . $country . PHP_EOL;

echo PHP_EOL;


echo "Example 3" . PHP_EOL;

// Concatenate String and Number

$name = "Sohug";
$age = 22;

echo "Name: " . $name . PHP_EOL;
echo "Age : " . $age . PHP_EOL;

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Concatenate Using .=

$message = "Hello";

$message .= " PHP";
$message .= " Developers";

echo $message . PHP_EOL;

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// Variable Interpolation

$name = "Sohug";
$department = "CSE";

echo "Name: $name" . PHP_EOL;
echo "Department: $department" . PHP_EOL;

echo PHP_EOL;



echo "Example 6" . PHP_EOL;

// Concatenation vs Interpolation

$name = "Sohug";

echo "Using Concatenation" . PHP_EOL;
echo "Hello " . $name . PHP_EOL;

echo PHP_EOL;

echo "Using Interpolation" . PHP_EOL;
echo "Hello $name" . PHP_EOL;

echo PHP_EOL;


echo "Example 7" . PHP_EOL;

// Building a Sentence

$product = "Laptop";
$brand = "Dell";
$price = 65000;

echo "Product: " . $product . PHP_EOL;
echo "Brand  : " . $brand . PHP_EOL;
echo "Price  : " . $price . PHP_EOL;

echo PHP_EOL;


echo "Example 8" . PHP_EOL;

// Building a Sentence with Interpolation

$product = "Mouse";
$price = 1200;

echo "The price of $product is $price BDT." . PHP_EOL;

echo PHP_EOL;



echo "Example 9" . PHP_EOL;

// Mixing Strings

$framework = "Laravel";
$version = "12";

echo $framework . " Version " . $version . PHP_EOL;

echo PHP_EOL;


echo "Example 10" . PHP_EOL;

// Real-Life Example

$name = "Sohug";
$university = "City University Bangladesh";
$cgpa = 3.85;

echo "Student Information" . PHP_EOL;
echo "Name       : $name" . PHP_EOL;
echo "University : $university" . PHP_EOL;
echo "CGPA       : $cgpa" . PHP_EOL;

echo PHP_EOL;