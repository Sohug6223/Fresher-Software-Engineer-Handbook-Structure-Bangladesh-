<?php
/*
# Practice 01 - Basic Loops

## Task 1

Print numbers from **1 to 10** using a `for` loop.

## Task 2

Print numbers from **10 to 1** using a `while` loop.

## Task 3

Print all **even numbers** from **1 to 20**.

## Task 4

Print all **odd numbers** from **1 to 20**.

## Task 5

Print numbers from **1 to 50** that are divisible by **5**.

## Task 6

Print numbers from **50 to 1** in reverse order.

## Task 7

Print the first **15 natural numbers**.

## Task 8

Print all numbers from **1 to 30**, but skip **15**.

## Task 9

Print numbers from **1 to 20** and stop when the number becomes **12**.


## Task 10

Print numbers from **100 to 10** by decreasing **10** each time.

Output

```
100
90
80
70
60
50
40
30
20
10
```

## Task 11

Print the square of numbers from **1 to 10**.

Output

```
1
4
9
16
25
36
49
64
81
100
```

## Task 12

Print the cube of numbers from **1 to 10**.

Output

```
1
8
27
64
125
216
343
512
729
1000
```

## Task 13

Print the following pattern using a single loop.

```
*****
```
*/

//Solution

// Task 1

echo "Task 1" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 2

echo "Task 2" . PHP_EOL;

$i = 10;

while ($i >= 1) {
    echo $i . PHP_EOL;
    $i--;
}

echo PHP_EOL;

// Task 3

echo "Task 3" . PHP_EOL;

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 == 0) {
        echo $i . PHP_EOL;
    }
}

echo PHP_EOL;

// Task 4

echo "Task 4" . PHP_EOL;

for ($i = 1; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}

echo PHP_EOL;

// Task 5

echo "Task 5" . PHP_EOL;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        echo $i . PHP_EOL;
    }
}

echo PHP_EOL;

// Task 6

echo " Task 6" . PHP_EOL;

for ($i = 50; $i >= 1; $i--) {
    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 7

echo "Task 7" . PHP_EOL;

for ($i = 1; $i <= 15; $i++) {
    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;

for ($i = 1; $i <= 30; $i++) {

    if ($i == 15) {
        continue;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;

for ($i = 1; $i <= 20; $i++) {

    if ($i == 12) {
        break;
    }

    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 10

echo "Task 10" . PHP_EOL;

for ($i = 100; $i >= 10; $i -= 10) {
    echo $i . PHP_EOL;
}

echo PHP_EOL;

// Task 11

echo "Task 11" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo $i * $i . PHP_EOL;
    //echo $i ** 2 . PHP_EOL;

}

echo PHP_EOL;

// Task 12

echo "Task 12" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    echo $i * $i * $i . PHP_EOL;
    //echo $i ** 3 . PHP_EOL;
}

echo PHP_EOL;

// Task 13

echo "Task 13" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    echo "*";
}

echo PHP_EOL;