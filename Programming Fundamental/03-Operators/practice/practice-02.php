<?php

/*
Assignment Operators

Task 1

Create a variable.

$balance = 1000;
Deposit 500.
Withdraw 300.

Print final balance.


Task 2

Stock = 100
Sell 15 products.
Add 40 products.

Print current stock.

Task 3

Salary = 30000

Increase by 10%.
Print updated salary.

*/

// Solution

// Task 1

$balance = 1000;
$balance += 500;
$balance -= 300;

echo "Final Balance : $balance" . PHP_EOL;
echo PHP_EOL;

// Task 2

$stock = 100;
$stock -= 15;
$stock += 40;

echo "Current Stock : $stock" . PHP_EOL;
echo PHP_EOL;

// Task 3

$salary = 30000;
$salary += ($salary * 10 / 100);
echo "Updated Salary : $salary" . PHP_EOL;