<?php

declare (strict_types = 1);

/*
Srict Types 

strict types disable automatic type conversion . 

Passing an incorrect data type throws a TypeError
*/

echo "Example 1".PHP_EOL;

function add(int $a, int $b) : int{
  return $a + $b;
}

echo add(10,20) .PHP_EOL;

echo PHP_EOL;


echo "Example 2".PHP_EOL;

function greet(string $name): string{
  return "Hello, ".$name;
  }

  echo greet("Sohug").PHP_EOL;

  echo PHP_EOL;


  echo "Example 3" . PHP_EOL;

function calculateArea(float $radius): float
{
    return 3.1416 * $radius * $radius;
}

echo calculateArea(5.5) . PHP_EOL;

echo PHP_EOL;



echo "Example 4" . PHP_EOL;

echo "Uncomment the following line to see TypeError." . PHP_EOL;

 //echo add("10", "20");

