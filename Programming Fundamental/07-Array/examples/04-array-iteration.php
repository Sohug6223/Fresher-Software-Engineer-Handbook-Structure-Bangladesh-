<?php
/*
Array Iteration

Array Iteration means accessing every element of an array one by one.

The most common way to iterate through an array is using the foreach loop.
*/

// Index Array

$fruits = [
  "Apple",
  "Banana",
  "Orange",
  "Mango"
];

echo "Indexed Array".PHP_EOL;
foreach ($fruits as $fruit){
  echo $fruit . PHP_EOL;
}

echo PHP_EOL;

//Associative Array

$student = [
  "Name" => "Sohug",
  "Department" => "CSE",
  "University" => "City University Bangladesh",
  "CGPA" => 3.85
];

echo "Associative Array".PHP_EOL;
foreach($student as $key => $value){
  echo $key . " : " . $value .PHP_EOL;
}

echo PHP_EOL;

// Multidimensional Array

$students = [
  ["Sohug",
  "CSE",
  3.04
],
[
  "Sajib",
  "CSE",
  3.75
],
[
  "Minhaj",
  "Textile",
  3.12
]
];

echo "Multidimensional Array" . PHP_EOL;

foreach ($students as $student) {

    foreach ($student as $value) {
        echo $value . " ";
    }

    echo PHP_EOL;
}

echo PHP_EOL;

// Foreach with Index

echo "Indexed Array with Index" . PHP_EOL;

foreach ($fruits as $index => $fruit) {
    echo $index . " => " . $fruit . PHP_EOL;
}

echo PHP_EOL;

// Foreach Summary
echo "Total Fruits: " . count($fruits) . PHP_EOL;
echo "Total Students: " . count($students) . PHP_EOL;

echo PHP_EOL;