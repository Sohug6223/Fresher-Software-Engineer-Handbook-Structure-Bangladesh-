<?php

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
=== Example 4 $GLOBALS/Global Keyword ===
*/

$university = "City University";
function showUniversity()
{
  echo $GLOBALS['university'].PHP_EOL;
}
showUniversity();