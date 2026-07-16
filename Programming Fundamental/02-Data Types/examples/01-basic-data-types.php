<?php

/*
PHP Basic Data Types
*/

//String

$name = "Sohug";
echo "String".PHP_EOL;
echo $name . PHP_EOL;
echo PHP_EOL;

//Integer

$age = 23;
echo "Integer" . PHP_EOL;
echo $age . PHP_EOL;
echo PHP_EOL;

//Float(Double)

$cgpa = 3.85;
echo "Float" . PHP_EOL;
echo $cgpa . PHP_EOL;
echo PHP_EOL;

//Boolean

$isStudent = true;
echo "Boolean" . PHP_EOL;
echo $isStudent . PHP_EOL;   // true prints 1
echo PHP_EOL;

//Array

$subjects = ["PHP", "Laravel", "MySQL"];
echo "Array" . PHP_EOL;
print_r($subjects); //print_r() is mainly used to display the contents of arrays and objects in a readable format.
echo PHP_EOL;

/*
Notes

1. String stores text.
2. Integer stores whole numbers.
3. Float stores decimal numbers.
4. Boolean has only two values:
   - true
   - false
5. Array stores multiple values.
6. NULL means "no value".
7. Object stores properties and methods.
   We will learn Objects in the OOP chapter.
*/
