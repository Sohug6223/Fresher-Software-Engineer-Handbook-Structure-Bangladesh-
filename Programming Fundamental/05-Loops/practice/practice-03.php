<?php

/* 

## Task 1

Print all numbers from **1 to 50**, skipping multiples of **5**.

## Task 2

Using a `while` loop, print numbers from **1 to 10**.

## Task 3

Using a `while` loop, print numbers from **10 to 1**.

## Task 4

Using a `while` loop, print all even numbers from **2 to 20**.

## Task 5

Using a `do...while` loop, print numbers from **1 to 10**.

## Task 6

Using a `do...while` loop, print numbers from **10 to 1**.

## Task 7

Create a simple menu using a `do...while` loop.

Menu

```
1. Start
2. Settings
3. Exit
```

The program should continue showing the menu until the user enters **3**.

---

## Task 8

Take numbers from the user continuously.

Stop the program when the user enters **0**.

Example

```
Enter Number : 5
Enter Number : 8
Enter Number : 12
Enter Number : 0

Program Ended.
```

## Task 9

Print numbers from **1 to 30**.

Skip all numbers divisible by **3**.


## Task 10

Print only numbers divisible by **7** between **1 and 100**.

*/

// solution

// Task 1

echo "Task 1" . PHP_EOL;

for ($i = 1; $i <= 50; $i++) {

    if ($i % 5 == 0) {
        continue;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 2

echo "Task 2" . PHP_EOL;

$i = 1;

while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}

echo PHP_EOL;

// Task 3

echo "Task 3" . PHP_EOL;

$i = 10;

while ($i >= 1) {
    echo $i . PHP_EOL;
    $i--;
}

echo PHP_EOL;

// Task 4

echo "Task 4" . PHP_EOL;

$i = 2;

while ($i <= 20) {
    echo $i . PHP_EOL;
    $i += 2;
}

echo PHP_EOL;
 
// Task 5

echo "Task 5" . PHP_EOL;

$i = 1;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 10);

echo PHP_EOL;

// Task 6

echo "Task 6" . PHP_EOL;

$i = 10;

do {
    echo $i . PHP_EOL;
    $i--;
} while ($i >= 1);

echo PHP_EOL;

// Task 7

echo "Task 7" . PHP_EOL;

$choice = 0;

do {

    echo PHP_EOL;
    echo "1. Start" . PHP_EOL;
    echo "2. Settings" . PHP_EOL;
    echo "3. Exit" . PHP_EOL;

    $choice = readline("Enter your choice: ");

} while ($choice != 3);

echo "Program Exited." . PHP_EOL;

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;

do {

    $number = readline("Enter Number: ");

} while ($number != 0);

echo "Program Ended." . PHP_EOL;

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;

for ($i = 1; $i <= 30; $i++) {

    if ($i % 3 == 0) {
        continue;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 10

echo "Task 10" . PHP_EOL;

for ($i = 1; $i <= 100; $i++) {

    if ($i % 7 == 0) {
        echo $i . PHP_EOL;
    }
}

echo PHP_EOL;