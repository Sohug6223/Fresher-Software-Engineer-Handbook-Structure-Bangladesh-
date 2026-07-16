<?php
/* 
var_dump() is a built-in PHP function that displays detailed information about a variable, including its data type and value.
*/

//PHP var_dump()

// String

$name = "Sohug";
echo "String" . PHP_EOL;
var_dump($name);
echo PHP_EOL;

// Integer

$age = 23;
echo "Integer" . PHP_EOL;
var_dump($age);
echo PHP_EOL;

//Float

$cgpa = 3.85;
echo "Float" . PHP_EOL;
var_dump($cgpa);
echo PHP_EOL;

//Boolean

$isStudent = true;
echo "===== Boolean =====" . PHP_EOL;
var_dump($isStudent);
echo PHP_EOL;

// Array

$subjects = ["PHP", "Laravel", "MySQL"];
echo "Array" . PHP_EOL;
var_dump($subjects);
echo PHP_EOL;

//NULL

$address = null;
echo "NULL" . PHP_EOL;
var_dump($address);
echo PHP_EOL;


// Object

class Student
{
    public $name = "Sohug";
}

$student = new Student();
echo "Object" . PHP_EOL;
var_dump($student);
echo PHP_EOL;