<?php

/*
 scope means where a variable can be accessed and where it cannot be accessed.
*/



// ===== PHP Variable Scope =====

/*
==== Example 1 Global Variable ===
*/

$name = "Sohug";
function showName()
{
  //echo $name ; error
}
showName();
echo "Example 1 Completed".PHP_EOL;

echo PHP_EOL;

/*
=== Example 2 Local Variable ===
*/

function student()
{
  $department = "CSE";
  echo $department . PHP_EOL;
}

student();
//echo $department; Error

echo PHP_EOL;

/*
=== Example 3 global Keyword ===
*/

$country = "Bangladesh";
function showCountry()
{
  global $country;
  echo $country . PHP_EOL;
}
showCountry();
echo PHP_EOL;

/*
=== Example 4 $GLOBALS===
*/

$university = "City University";
function showUniversity()
{
  echo $GLOBALS['university'].PHP_EOL;
}
showUniversity();

/*  example -1
$name = "Sohug"; ..global variable. cause it's outside the function.

can't see global variable inside the function. 
So, echo $name;--error


example-2
$department- local variable. it's work inside the functon student().

outside function- echo $department;  it's error


example-3
global $country;- global variable inside the function.

example-4
$GLOBALS['university'] - php special array.  here all global variable.
*/