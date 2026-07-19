<?php

/*
1.Convert a String age into Integer.

2. Convert an Integer into String.

3. Convert a Float into Integer.

4. Convert an Integer into Float.

5. Convert an Integer into Boolean.

Use var_dump() before and after every conversion.
*/

//1. String -> Integer
$stringAge = "23";

echo "1. String -> Integer".PHP_EOL;
var_dump($stringAge);

$stringAge = (int) $stringAge;
var_dump($stringAge);

echo PHP_EOL;

//2. Integer -> String
$number = 100;

echo "2. Integer -> String".PHP_EOL;
var_dump($number);

$number = (string) $number;
var_dump($number);

echo PHP_EOL;

// 3. Float -> Integer
$cgpa = 3.04;

echo "3. Float -> Integer". PHP_EOL;
var_dump($cgpa);

$cgpa = (int) $cgpa;
var_dump($cgpa);

echo PHP_EOL;

//4. Integer -> Float
$marks = 90;

echo "4. Integer -> Float".PHP_EOL;
var_dump($marks);

$marks = (float) $marks;
var_dump($marks);

echo PHP_EOL;

//5. Integer -> Boolean
$status = 1;

echo "5. Integer -> Boolean".PHP_EOL;
var_dump($status);

$status = (bool) $status;
var_dump($status);
