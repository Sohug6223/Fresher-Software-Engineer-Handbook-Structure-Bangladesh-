<?php

/*

PHP Increment & Decrement Operators

These operators increase or decrease a variable by 1.

Operators:

++
--

Types:

Pre Increment
Post Increment

Pre Decrement
Post Decrement

*/



// Increment (++)

echo "Increment (++)" . PHP_EOL;

$number = 10;
$number++;
echo $number . PHP_EOL;
echo PHP_EOL;

// Decrement (--)

echo "Decrement (--)" . PHP_EOL;

$number = 10;
$number--;
echo $number . PHP_EOL;
echo PHP_EOL;

/*
Pre Increment -> 

Increase First
Then
Use the Value

*/  

echo "Pre Increment" . PHP_EOL;

$number = 10;
echo ++$number . PHP_EOL;
echo "Current Value: $number" . PHP_EOL;
echo PHP_EOL;
 
/*
Post Increment ->
Use First
Then
Increase
*/

echo "Post Increment" . PHP_EOL;

$number = 10;

echo $number++ . PHP_EOL;
echo "Current Value: $number" . PHP_EOL;
echo PHP_EOL;

// Pre Decrement

echo "Pre Decrement" . PHP_EOL;

$number = 10;
echo --$number . PHP_EOL;
echo "Current Value: $number" . PHP_EOL;
echo PHP_EOL;

// Post Decrement

echo "Post Decrement" . PHP_EOL;

$number = 10;

echo $number-- . PHP_EOL;
echo "Current Value: $number" . PHP_EOL;
echo PHP_EOL;

//Real-Life Examples

// Example 1

echo "Website Visitors" . PHP_EOL;

$visitors = 100;

$visitors++;
echo "Visitors: $visitors" . PHP_EOL;
echo PHP_EOL;


// Example 2

echo "Product Stock" . PHP_EOL;

$stock = 25;
$stock--;
echo "Remaining Stock: $stock" . PHP_EOL;

echo PHP_EOL;


// Example 3

echo "Page Number" . PHP_EOL;

$page = 1;
$page++;
echo "Current Page: $page" . PHP_EOL;

echo PHP_EOL;


