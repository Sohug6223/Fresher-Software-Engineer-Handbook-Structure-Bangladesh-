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
 Create a function that takes age
 and returns "Eligible" or "Not Eligible".

 Eligibility Age: 18

 Task 9
 Create a function that takes a cart total
 and returns the shipping charge.

 Rules:

 Cart Total >= 3000
 Shipping = 0

 Otherwise
 Shipping = 60

 Task 10
 Create a function that takes basic salary
 and bonus and returns the total salary.

 Task 11
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
studentinfo("Sohug", "CSE");