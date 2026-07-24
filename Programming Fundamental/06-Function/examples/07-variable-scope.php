<?php

/*
Vsariable Scope

Variable scope determines where a variable can be accesses.
*/

echo "Example 1".PHP_EOL;
//Example 1: Local Scope

function student()
{
  $name = "Sohug";
  echo $name . PHP_EOL;
}

student();
echo PHP_EOL;

echo "Example 2".PHP_EOL;
//Example 2: Global Scope

$country = "Bangladesh";
function showCountry()
{
  global $country;
  echo $country.PHP_EOL;
}
showCountry();
echo PHP_EOL;

echo "Example 3" . PHP_EOL;

// Example 3: Using \$GLOBALS

$university = "City University";

function showUniversity()
{
    echo $GLOBALS["university"] . PHP_EOL;
}

showUniversity();

echo PHP_EOL;


echo "Example 4" . PHP_EOL;

// Example 4: Static Variable

function counter()
{
    static $count = 0;

    $count++;

    echo $count . PHP_EOL;
}

counter();
counter();
counter();

echo PHP_EOL;


echo "Example 5" . PHP_EOL;

// Example 5: Parameter Scope

function greet($name)
{
    echo "Hello, " . $name . PHP_EOL;
}

greet("Sohug");
greet("Sajib");