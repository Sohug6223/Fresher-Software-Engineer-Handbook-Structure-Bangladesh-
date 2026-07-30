<?php

$name = readline("Enter Name: ");
$age = readline("Enter Age: ");
$cgpa = readline("Enter CGPA: ");
$department = readline("Enter Department: ");
$university = readline("Enter University: ");

// Additional Variables

$isStudent = true;
$subjects = [
  "PHP",
  "Laravel",
  "MySQL"
];

$address = null;

// Data Types (Before Casting)
echo PHP_EOL;
echo "Data Types (Before Casting)".PHP_EOL;

echo "Name              : ".gettype($name) . PHP_EOL;
echo "Age               : ".gettype($age).PHP_EOL;
echo "CGPA              : ".gettype($cgpa).PHP_EOL;
echo "Department        : ".gettype($department).PHP_EOL;
echo "University        : ".gettype($university).PHP_EOL;
echo "Student           : ".gettype($isStudent).PHP_EOL;
echo "Subjects          : ".gettype($subjects).PHP_EOL;
echo "Address           : ".gettype($address).PHP_EOL;

//var_dump() & type Casting


echo PHP_EOL;
echo "Before Casting".PHP_EOL;

echo "Age : ";
var_dump($age);

echo "CGPA : ";
var_dump($cgpa);

$age = (int) $age;
$cgpa = (float) $cgpa;

echo PHP_EOL;
echo "After Casting".PHP_EOL;

echo "Age : ";
var_dump($age);

echo "CGPA : ";
var_dump($cgpa);

//truthy / falsy
$nameStatus = $name ? "Truthy" : "Falsy";
$addressStatus = $address ? "Truthy" : "Falsy";
$subjectsStatus = $subjects ? "Truthy" : "Falsy";

echo PHP_EOL;

echo "Student Data Analyzer".PHP_EOL;
echo PHP_EOL;

echo "Name        : $name" . PHP_EOL;
echo "Age         : $age" . PHP_EOL;
echo "CGPA        : $cgpa" . PHP_EOL;
echo "Department  : $department" . PHP_EOL;
echo "University  : $university" . PHP_EOL;

echo PHP_EOL;

echo "Name              : ".gettype($name) . PHP_EOL;
echo "Age               : ".gettype($age).PHP_EOL;
echo "CGPA              : ".gettype($cgpa).PHP_EOL;
echo "Department        : ".gettype($department).PHP_EOL;
echo "University        : ".gettype($university).PHP_EOL;
echo "Student           : ".gettype($isStudent).PHP_EOL;
echo "Subjects          : ".gettype($subjects).PHP_EOL;
echo "Address           : ".gettype($address).PHP_EOL;

echo PHP_EOL;

echo "Name        : $nameStatus".PHP_EOL;
echo "Address     : $addressStatus".PHP_EOL;
echo "Subjects     : $subjectsStatus".PHP_EOL;

echo PHP_EOL;
echo "Analysis Completed Successfully".PHP_EOL;