<?php

/*
PHP Comparison Operators

Comparison Operators compare two values.

The result is always: true or false

operators: ==,===,!=, !==,>,<,>=,<=,<=>
*/

echo "Equal(==)".PHP_EOL;

$a=10;
$b="10";
var_dump($a == $b);
echo PHP_EOL;

/*
Loose Comparison

only compares VALUE.
Ignores Data Type.
*/

echo "Identical(===)".PHP_EOL;
var_dump($a === $b);
echo PHP_EOL;

/*
Strict Comparison

Compares Value + Data Type
*/

echo "Not Equal(!=)".PHP_EOL;
var_dump($a != 20);
echo PHP_EOL;

echo "Greater Than (>)".PHP_EOL;
var_dump(20 > 10);
echo PHP_EOL;

echo "Less Than (<)".PHP_EOL;
var_dump(20 < 10);
echo PHP_EOL;

echo "Greater Than or Equal (>=)". PHP_EOL;
var_dump(20 >= 20);
echo PHP_EOL;

echo "Less Than or Equal (<=)". PHP_EOL;
var_dump(20 <= 30);
echo PHP_EOL;

echo "Spaceship (<=>)" . PHP_EOL;
echo 10 <=> 20;
echo PHP_EOL;

echo 20 <=> 10;
echo PHP_EOL;

echo 20 <=> 20;
echo PHP_EOL;

echo PHP_EOL;

//Real life example

//login

echo "Login".PHP_EOL;
$password = "123456";
$userPassword = "123456";

var_dump($password === $userPassword);
echo PHP_EOL;
 
//Voting
echo "Voting".PHP_EOL;
$age = 20;

var_dump($age>=18);
echo PHP_EOL;

//Pass or Fail

echo "Pass/Fail".PHP_EOL;
$marks = 40;
var_dump($marks >= 33);
echo PHP_EOL;