<?php

/*
 Practice 01 - Basic Functions

 Complete the following tasks using functions.

 Task 1
 Create a function that prints "Hello, PHP!".

 Task 2
 Create a function that prints your name.

 Task 3
 Create a function that prints numbers from 1 to 10.

 Task 4
 Create a function that prints the multiplication table of 5.

 Task 5
 Create a function that prints five stars.

 Output

 *****

 Task 6
 Create a function that prints a 5 × 5 square using stars.

 Output

 * * * * *
 * * * * *
 * * * * *
 * * * * *
 * * * * *

 Task 7
 Create a function that prints the following right triangle.

 *
 * *
 * * *
 * * * *
 * * * * *


 Task 9
 Create a function that prints the current date.

 Hint:
 date("Y-m-d")

 Task 10
 Create a function that prints the current time.

 Hint:
 date("H:i:s")

*/

// Solution

// Task 1
function greet()
{
  echo "Hello,PHP!".PHP_EOL;
}
echo "Task 1".PHP_EOL;
greet();

// Task 2

function printName()
{
  echo "Name: Sohug".PHP_EOL;
}
echo "Task 2".PHP_EOL; 
printName();

// Task 3

function printNumber()
{
  for($i=1;$i<=10;$i++)
    {
      echo $i. " ";
    }
}
echo "Task 3".PHP_EOL;
printNumber();

// Task 4

function multiplicationTable()
{
  for($i=1; $i<=10; $i++)
    {
      echo "5 x $i = ".(5* $i).PHP_EOL;
    }
}
echo "Task 4".PHP_EOL;
multiplicationTable();

//Task 5

function printStar()
{
  for($i=1;$i<=5;$i++){
    echo "*";
  }
  echo PHP_EOL;
}
echo "Task 5".PHP_EOL;

//Task 6

function printSquare(){
  for($row = 1; $row <= 5; $row++){
    for ($col = 1; $col <= 5; $col++) {
            echo "* ";
    }
    echo PHP_EOL;
  }
}
echo "Task6".PHP_EOL;
printSquare();

//Task 7

function printTriangle()
{
    for ($row = 1; $row <= 5; $row++) {

        for ($col = 1; $col <= $row; $col++) {
            echo "* ";
        }

        echo PHP_EOL;
    }
}

echo "Task 7".PHP_EOL;
printTriangle();

//Task 8

function currentDate()
{
    echo "Current Date: " . date("Y-m-d") . PHP_EOL;
}
echo "Task 8".PHP_EOL;
currentDate();

//Task 9

function currentTime()
{
  echo "cureentTime: ".date("H:i:s").PHP_EOL;
}
echo "Task 9".PHP_EOL;
currentTime();