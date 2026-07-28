<?php
/*
Indexed Arrays

An indexed array stores multiple values.

Each value has a numeric index.

By default, indexing starts from 0.

*/

//Method 1 - Short array syntex

$fruits=[
  "Apple",
  "bananna",
  "Orange",
  "Mango"

];

echo "Method 1".PHP_EOL;
print_r($fruits);
echo PHP_EOL;

//Method 2 - array() Function

$colors = array(
  "Red",
  "Green",
  "Blue",
  "Black"
);

echo "Method 2".PHP_EOL;
echo PHP_EOL;

//Accesing Array Elements

echo "Accessing Elements".PHP_EOL;

echo $fruits[0] . PHP_EOL;
echo $fruits[1] . PHP_EOL;
echo $fruits[2] . PHP_EOL;
echo $fruits[3] . PHP_EOL;

echo PHP_EOL;

//Array Index

echo "Array Index" .PHP_EOL;

echo "Index 0 = " . $fruits[0] .PHP_EOL;
echo "Index 1 = " . $fruits[0] .PHP_EOL;
echo "Index 2 = " . $fruits[0] .PHP_EOL;
echo "Index 3 = " . $fruits[0] .PHP_EOL;


// Total Elements

echo "Total Elements" .PHP_EOL;

echo count($fruits).PHP_EOL;

//print_r()

echo "print_r()".PHP_EOL;

print_r($fruits);
echo PHP_EOL;

//var_dump()
echo "var_dump()".PHP_EOL;
var_Dump($fruits);
echo PHP_EOL;