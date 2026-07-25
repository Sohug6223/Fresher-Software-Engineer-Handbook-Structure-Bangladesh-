<?php

/*

 Practice 02 - Parameters and Return Values

 Complete the following tasks using functions.

 Task 1
 Create a function that takes two numbers
 and returns their sum.


 Task 2
 Create a function that takes a student's
 name and department and prints the information.

 Example

 Name: Sohug
 Department: CSE


 Task 3
 Create a function that takes a radius
 and returns the area of a circle.

 Use:

 3.1416

 Task 4
 Create a function that takes a number
 and returns whether it is even or odd.

 Example Output

 Even

 or

 Odd

 Task 5
 Create a function that takes a number
 and returns its square.

 Task 6
 Create a function that takes a number
 and returns its cube.

 Task 7
 Create a function that takes marks
 and returns "Pass" or "Fail".

 Pass Marks: 40


 Task 8
 Create a function that takes basic salary
 and bonus and returns the total salary.

 Task 9
 Create a function that takes three numbers
 and returns the largest number.

*/

// solution

// Task 1
function sum($num1, $num2)
{
  return $num1 + $num2;
}
echo "Task1".PHP_EOL;
echo sum(10,20).PHP_EOL;

//task 2
function studentInfo($name,$department)
{
  echo "Name: $name". PHP_EOL;
  echo "Department: $department".PHP_EOL;
}

echo "Task 2".PHP_EOL;
studentInfo("Sohug", "CSE");

// Task 3

function circleArea($radius)
{
  return 3.1416 * $radius * $radius;
}
echo "Task 3".PHP_EOL;
echo circleArea(5).PHP_EOL;

// Task 4
function checkEvenOdd($number)
{
    return ($number % 2 == 0)? "Even" : "Odd";
}
echo "Task 4".PHP_EOL;
echo checkEvenOdd(5).PHP_EOL;

// Task 5
function square($number)
{
    return $number * $number;
}
echo "Task 5".PHP_EOL;
echo square(7).PHP_EOL;

//Task 6
function cube($number)
{
    return $number * $number * $number;
}
echo "Task 6".PHP_EOL;
echo cube(3).PHP_EOL;

// Task 7
function checkMark($marks)
{
  return($marks>=40)? "Pass" : "Fail";
}
echo "Task 7".PHP_EOL;
echo "Result: ". checkMark(43).PHP_EOL;

// Task 8

function totalSalary($basicSalary, $bonus)
{
    return $basicSalary + $bonus;
}
echo "Task 8".PHP_EOL;
echo "Total: ". totalSalary(250000,4000).PHP_EOL;

// Task 9

function getLargestNumber($num1, $num2, $num3)
{
    return max($num1, $num2, $num3);
}
echo "Task 9".PHP_EOL;
echo "Largest Number: " . getLargestNumber(10, 25, 15);