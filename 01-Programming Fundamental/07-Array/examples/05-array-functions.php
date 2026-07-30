<?php

/*
Array Function

PHP provides many  built-in functions to create, modify, search and sort arrays.

In this examples, we will learn some of the most commonly used array functions.
*/

// count() -> return the total number of elements in an array.

$fruits = [
  "Apple",
  "Banana",
  "Orange"
];

echo "count()" . PHP_EOL;
echo count($fruits).PHP_EOL;

// array_push() -> Adds one or more elements to the end of an array.

echo "array_push()".PHP_EOL;
array_push($fruits, "Mango");
print_r($fruits);

echo PHP_EOL;

// array_pop() -> Removes the last element from an array.

echo "array_pop()" . PHP_EOL;
array_pop($fruits);
print_r($fruits);
echo PHP_EOL;

// array_unshift() -> Adds one or more elemets to the begining of an array.

echo "array_unshift()" .PHP_EOL;
array_unshift($fruits, "Pineapple");;
print_r($fruits);
echo PHP_EOL;

// array_shift() -> Removes the first element from an array.

echo "array_shift()" . PHP_EOL;
array_shift($fruits);
print_r($fruits);
echo PHP_EOL;


// in_array() -> Checks whether a value exits in an array

echo "in_array()" .PHP_EOL;

if(in_array("Apple", $fruits)){
  echo "Apple Found" . PHP_EOL;
}
else{
  echo "Apple Not Found".PHP_EOL;
}

echo PHP_EOL;

//array_merge() -> Combines two or more arrays into a single array.

$summerFruits = [
  "Mango",
  "Jackfruit"
];

echo "array_merge()".PHP_EOL;

$allFruits = array_merge($fruits, $summerFruits);
print_r($allFruits);
echo PHP_EOL;

// sort() -> sorts an array in ascending order

echo "sort()".PHP_EOL;
sort($allFruits);
print_r($allFruits);
echo PHP_EOL;

// rsort() -> sorts an array in descending order.

echo "rsort()".PHP_EOL;
rsort($allFruits);
print_r($allFruits);
echo PHP_EOL;

