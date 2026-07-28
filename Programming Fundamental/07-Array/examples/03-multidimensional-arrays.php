<?php
/*
 Multidimensional Arrays

 A multidimensional array is an array that contains one or more arrays.

 It's used to store related data together.
*/

//Creating a Multidimensional Array

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

echo "Students" .PHP_EOL;
print_r($students);
echo PHP_EOL;

// Accessing Elements

echo "First Student" . PHP_EOL;

echo "Name       : " . $students[0][0] . PHP_EOL;
echo "Department : " . $students[0][1] . PHP_EOL;
echo "CGPA       : " . $students[0][2] . PHP_EOL;

echo PHP_EOL;

echo "Second Student" . PHP_EOL;

echo "Name       : " . $students[1][0] . PHP_EOL;
echo "Department : " . $students[1][1] . PHP_EOL;
echo "CGPA       : " . $students[1][2] . PHP_EOL;

echo PHP_EOL;

echo "Third Student" . PHP_EOL;

echo "Name       : " . $students[2][0] . PHP_EOL;
echo "Department : " . $students[2][1] . PHP_EOL;
echo "CGPA       : " . $students[2][2] . PHP_EOL;

echo PHP_EOL;

// Total Students

echo "Total Students" . PHP_EOL;
echo count($students) . PHP_EOL;
echo PHP_EOL;

// print_r()
echo "print_r()" . PHP_EOL;
print_r($students);
echo PHP_EOL;

// var_dump()
echo "var_dump()" . PHP_EOL;
var_dump($students);
echo PHP_EOL;