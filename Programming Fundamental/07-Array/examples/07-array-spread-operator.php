<?php

/*
 Array Spread Operator

 The spread operator (...) allows you
 to unpack array elements into another array.

 It provides a shorter and cleaner way
 to copy and merge arrays.

 Note:
 This is a modern PHP feature.
 It is commonly used in modern PHP applications.

*/

// Copying an Array


$fruits = [
    "Apple",
    "Banana",
    "Orange"
];

$copiedFruits = [...$fruits];

echo "Copying an Array" . PHP_EOL;

print_r($copiedFruits);

echo PHP_EOL;

// Merging Two Arrays

$summerFruits = [
    "Mango",
    "Jackfruit"
];

$allFruits = [
    ...$fruits,
    ...$summerFruits
];

echo "Merging Two Arrays" . PHP_EOL;

print_r($allFruits);

echo PHP_EOL;

// Adding New Elements


$newFruits = [
    ...$fruits,
    "Guava",
    "Pineapple"
];

echo "Adding New Elements" . PHP_EOL;

print_r($newFruits);

echo PHP_EOL;

// Merging Multiple Arrays


$vegetables = [
    "Potato",
    "Tomato"
];

$foods = [
    ...$fruits,
    ...$summerFruits,
    ...$vegetables
];

echo "Merging Multiple Arrays" . PHP_EOL;

print_r($foods);

echo PHP_EOL;

// Associative Arrays

$student = [
    "name" => "Sohug",
    "department" => "CSE"
];

$studentDetails = [
    ...$student,
    "cgpa" => 3.85,
    "university" => "City University Bangladesh"
];

echo "Associative Array" . PHP_EOL;

print_r($studentDetails);

echo PHP_EOL;

// array_merge() vs Spread Operator


$array1 = [1, 2];
$array2 = [3, 4];

echo "array_merge()" . PHP_EOL;

print_r(array_merge($array1, $array2));

echo PHP_EOL;

echo "Spread Operator" . PHP_EOL;

print_r([
    ...$array1,
    ...$array2
]);

echo PHP_EOL;

/* 
The Spread Operator (...) is a modern PHP feature that makes array operations shorter and more readable. It is commonly used in modern PHP applications and frameworks like Laravel.

For basic array merging, both array_merge() and the Spread Operator produce similar results. Many developers prefer the Spread Operator because of its cleaner syntax.
*/