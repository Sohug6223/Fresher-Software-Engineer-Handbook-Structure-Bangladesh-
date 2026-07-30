<?php

/*
Variable Scope


Task 1

Create a global variable.

Print it using the global keyword.

-----------------------------------------

Task 2

Create another global variable.

Print it using $GLOBALS.

-----------------------------------------

Task 3

Create a local variable.

Try to print it outside the function.

Observe the error.

-----------------------------------------

Task 4

Create two different local variables
inside two different functions.

Print them.

Observe that each function has
its own local scope.
*/

//solution

//task 1
$name = "Sohug";
function showName()
{
  global $name; // access global variable
  echo "Task 1 : $name" . PHP_EOL;
}
showName();
echo PHP_EOL;

//task 2
$department = "CSE";
function showDepartment()
{
  echo "Task 2: " . $GLOBALS['department'] . PHP_EOL;
}
showDepartment();

echo PHP_EOL;

//task 3
function student()
{
  $id = 101; //local variable
  echo "Inside Function: $id" . PHP_EOL;
}
student();
// echo $id; error. $id exists only inside the student() function.

echo PHP_EOL;

//task 4
function firstFunction()
{
    $city = "Dhaka";
    echo "First Function: $city" . PHP_EOL;
}

function secondFunction()
{
    $country = "Bangladesh";
    echo "Second Function: $country" . PHP_EOL;
}

firstFunction();
secondFunction();
/*
Each function has its own local scope.

Variables created inside one function
cannot be accessed from another function.
*/