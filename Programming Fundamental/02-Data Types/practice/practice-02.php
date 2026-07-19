<?php

/*
Create variables for:

  Name,Age,CGPA,Is Student,Subjects,Address

Print only their data types using gettype().
*/

$name = "Sohug";
$age = 23;
$cgpa = 3.04;
$isStudent = true;
$subjects = ["C", "C++", "PHP", "JavaScript"];
$address = null;

echo gettype($name). PHP_EOL;
echo gettype($age) . PHP_EOL;
echo gettype($cgpa) . PHP_EOL;
echo gettype($isStudent) . PHP_EOL;
echo gettype($subjects) . PHP_EOL;
echo gettype($address) . PHP_EOL;