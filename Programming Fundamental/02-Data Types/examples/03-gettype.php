<?php

/*
gettype() is a built-in PHP function that returns the data type of a variable as a string.

Syntax - 
gettype($variable);
*/

// PHP gettype()

// string

$name = "Sohug";
echo "String".PHP_EOL;
echo gettype($name).PHP_EOL;
echo PHP_EOL;

//Integer

$age = 23;
echo "Integer".PHP_EOL;
echo gettype($age).PHP_EOL;
echo PHP_EOL;

//Foat

$cgpa = 3.85;
echo "Float".PHP_EOL;
echo gettype($cgpa). PHP_EOL;
echo PHP_EOL;

//Boolen

$isStudent = true;
echo "Boolean".PHP_EOL;
echo gettype($isStudent).PHP_EOL;
echo PHP_EOL;

//Array

$subjects = ["PHP", "Laravel", "MySQL"];
echo "Array".PHP_EOL;
echo gettype($subjects).PHP_EOL;
echo PHP_EOL;

//Null

$address = null;
echo "Null".PHP_EOL;
echo gettype($address).PHP_EOL;
echo PHP_EOL;

//Object

class student
{
  public $name = "Sohug";
}
$student = new Student();
echo "object".PHP_EOL;
echo gettype($student).PHP_EOL;
echo PHP_EOL;