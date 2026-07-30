<?php

/* 

## Task 1

Calculate the sum of numbers from **1 to 100**.


## Task 2

Calculate the sum of all **even numbers** from **1 to 100**.


## Task 3

Calculate the sum of all **odd numbers** from **1 to 100**.


## Task 4

Calculate the factorial of **5**.


## Task 5

Calculate the factorial of a number entered by the user.


## Task 6

Print the multiplication table of **7**.


## Task 7

Take a number from the user and print its multiplication table.


## Task 8

Count the total digits of a number.


## Task 9

Reverse the following loop output.


## Task 10

Find the sum of the following numbers.

```
10
20
30
40
50
```

Expected Output

```
150


## Task 11

Print all numbers between **1 and 100** that are divisible by both **3 and 5**.


## Task 12

Find the sum of squares from **1 to 10**.


## Task 13

Find the sum of cubes from **1 to 5**.


## Task 14

Print the following sequence.

```
5
10
15
20
25
30
35
40
45
50
```
*/

//solution

// Task 1

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo "Task 1: Sum = $sum";
echo PHP_EOL . PHP_EOL;

// Task 2


$sum = 0;

for ($i = 2; $i <= 100; $i += 2) {
    $sum += $i;
}

echo "Task 2: Even Sum = $sum";
echo PHP_EOL . PHP_EOL;

// Task 3
// Sum of odd numbers from 1 to 100


$sum = 0;

for ($i = 1; $i <= 100; $i += 2) {
    $sum += $i;
}

echo "Task 3: Odd Sum = $sum";
echo PHP_EOL . PHP_EOL;

// Task 4

$factorial = 1;

for ($i = 1; $i <= 5; $i++) {
    $factorial *= $i;
}

echo "Task 4: Factorial of 5 = $factorial";
echo PHP_EOL . PHP_EOL;

// Task 5

$number = (int) readline("Enter a number: ");

$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}

echo "Task 5: Factorial of $number = $factorial";
echo PHP_EOL . PHP_EOL;

// Task 6

echo "Task 6: Multiplication Table of 7";
echo PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i);
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 7

$number = (int) readline("Enter a number: ");

echo "Task 7: Multiplication Table of $number";
echo PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo "$number x $i = " . ($number * $i);
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 8

$number = (int) readline("Enter a number: ");

$count = 0;
$temp = abs($number);

if ($temp == 0) {
    $count = 1;
} 
else {
    while ($temp > 0) {
        $temp = (int)($temp / 10);
        $count++;
    }
}

echo "Task 8: Total Digits = $count";
echo PHP_EOL . PHP_EOL;

// Task 9

echo "Task 9:";
echo PHP_EOL;

for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

echo PHP_EOL . PHP_EOL;

// Task 10

$numbers = [10, 20, 30, 40, 50];

$sum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

echo "Task 10: Sum = $sum";
echo PHP_EOL . PHP_EOL;

// Task 11

echo "Task 11:";
echo PHP_EOL;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}

echo PHP_EOL . PHP_EOL;

// Task 12

$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    $sum += $i * $i;
}

echo "Task 12: Sum of Squares = $sum";
echo PHP_EOL . PHP_EOL;

// Task 13

$sum = 0;

for ($i = 1; $i <= 5; $i++) {
    $sum += $i * $i * $i;
}

echo "Task 13: Sum of Cubes = $sum";
echo PHP_EOL . PHP_EOL;

// Task 14

echo "Task 14:";
echo PHP_EOL;

for ($i = 5; $i <= 50; $i += 5) {
    echo $i;
    echo PHP_EOL;
}