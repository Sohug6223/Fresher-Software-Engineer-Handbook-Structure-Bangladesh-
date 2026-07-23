<?php
/* 

## Task 1

Print the following rectangle pattern.

```
* * * * * *
* * * * * *
* * * * * *
* * * * * *
```

## Task 2

Print the following right triangle.

```
*
* *
* * *
* * * *
* * * * *
```

---

## Task 3

Print the following inverted triangle.

```
* * * * *
* * * *
* * *
* *
*
```

## Task 4

Print the following inverted number triangle.

```
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1
```

## Task 5

Print the following continuous number pattern.

```
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15
```

## Task 6

Print the following character pattern.

```
A
A B
A B C
A B C D
A B C D E
```

## Task 7

Print the following hollow rectangle.

```
* * * * *
*       *
*       *
*       *
* * * * *
```

## Task 8

Print the following checkerboard pattern.

```
* - * - *
- * - * -
* - * - *
- * - * -
* - * - *
```


## Task 9

Print the following pattern.

```
5
5 4
5 4 3
5 4 3 2
5 4 3 2 1
```

Task 10

Print the following pattern.

```
1
2 2
3 3 3
4 4 4 4
5 5 5 5 5
```

## Task 11

Print the following pattern.

```
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15
16 17 18 19 20 21
```
*/

//solution

// Task 1

echo "Task 1" . PHP_EOL;

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 6; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 2

echo "Task 2" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 3

echo "Task 3" . PHP_EOL;

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 4

echo "Task 4" . PHP_EOL;

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 5
// Continuous Number Pattern

echo "Task 5" . PHP_EOL;

$number = 1;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " ";
        $number++;
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 6
// Character Pattern

echo "Task 6" . PHP_EOL;

for ($i = 65; $i <= 69; $i++) {
    for ($j = 65; $j <= $i; $j++) {
        echo chr($j) . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 7

echo "Task 7" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {

        if ($i == 1 || $i == 5 || $j == 1 || $j == 5) {
            echo "* ";
        } else {
            echo "  ";
        }

    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {

        if (($i + $j) % 2 == 0) {
            echo "* ";
        } else {
            echo "- ";
        }

    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j >= 6 - $i; $j--) {
        echo $j . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 10

echo "Task 10" . PHP_EOL;

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

// Task 11

echo "Task 11" . PHP_EOL;

$number = 1;

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . " ";
        $number++;
    }
    echo PHP_EOL;
}
