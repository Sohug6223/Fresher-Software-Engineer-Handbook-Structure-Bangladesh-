<?php
/*
Truthy and Falsy determine how PHP evaluates a value in a boolean context.

যখন কোনো Value if, while, &&, || ইত্যাদির মধ্যে ব্যবহার করা হয়, তখন PHP সেটিকে true অথবা false হিসেবে বিবেচনা করে। এই আচরণকেই Truthy & Falsy বলে।
*/

//php truthy & falsy

// Example 1 Truthy String

$name = "Sohug";
echo "Example 1".PHP_EOL;

if($name){
  echo "Truthy".PHP_EOL;
}
else{
  echo "Falsy".PHP_EOL;
}
echo PHP_EOL;

//Example 2 Falsy Empty String

$name = "";
echo "Example 2".PHP_EOL;
if ($name){
  echo "Truthy" . PHP_EOL;
}
else {
  echo "Falsy" . PHP_EOL;
}
echo PHP_EOL;

// Example 3 Truthy Integer

$age = 23;
echo "Example 3".PHP_EOL;
if($age){
  echo "Truthy".PHP_EOL;
}
else{
  echo "Falsy".PHP_EOL;
}
echo PHP_EOL;

//Example 4 Falsy Integer
$age = 0;
echo "example 4".PHP_EOL;
 if($age){
  echo "Truthy".PHP_EOL;
 }
 else{
  echo "Falsy".PHP_EOL;
 }

echo PHP_EOL;

//Example 5 Null

$address = null;
echo "example 5".PHP_EOL;
if($address){
  echo "Truthy".PHP_EOL;
}
else{
  echo "Falsy".PHP_EOL;
}

echo PHP_EOL;

// Example 6 Array

$subjects = ["pHP","LARAVEL"];
echo "Example 6".PHP_EOL;
if($subjects){
  echo "Truthy".PHP_EOL;
}
else {
  echo "Falsy".PHP_EOL;
}
echo PHP_EOL;

//Example 7 Empty Array

$subjects = [];
echo "Example 7".PHP_EOL;

if($subjects){
  echo "Turthy".PHP_EOL;
}
else {
  echo "Falsy". PHP_EOL;
}
echo PHP_EOL;