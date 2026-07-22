<?php

/*

Student Result Management System

Store:

- Student Name
- Roll Number
- Department

Input Marks:

- Bangla
- English
- Mathematics
- Science
- ICT

Calculate:

- Total Marks
- Average Marks
- Grade
- Pass / Fail

Rules

Any subject below 33 -> Fail

Otherwise

80-100 -> A+
70-79  -> A
60-69  -> A-
50-59  -> B
40-49  -> C
33-39  -> D
Below 33 -> F

Bonus

Average >= 80

Print

Scholarship Eligible

Otherwise

Not Eligible

*/

// Student Information

$name = readline("Enter Student Name: ");
$roll = readline("Enter Roll Number: ");
$department = readline("Enter Department: ");

echo PHP_EOL;

// Subject Marks

$bangla = readline("Bangla: ");
$english = readline("English: ");
$math = readline("Mathematics: ");
$science = readline("Science: ");
$ict = readline("ICT: ");

echo PHP_EOL;

// Calculation

$total = $bangla + $english + $math + $science + $ict;

$average = $total / 5;

// Result

if (
    $bangla < 33 ||
    $english < 33 ||
    $math < 33 ||
    $science < 33 ||
    $ict < 33
) 
{

    $grade = "F";
    $status = "Fail";

} 
elseif ($average >= 80) {

    $grade = "A+";
    $status = "Pass";

} 
elseif ($average >= 70) {

    $grade = "A";
    $status = "Pass";

} 
elseif ($average >= 60) {

    $grade = "A-";
    $status = "Pass";

} 
elseif ($average >= 50) {

    $grade = "B";
    $status = "Pass";

} 
elseif ($average >= 40) {

    $grade = "C";
    $status = "Pass";

} 
elseif ($average >= 33) {

    $grade = "D";
    $status = "Pass";

} 
else {

    $grade = "F";
    $status = "Fail";

}

// Scholarship

$scholarship = ($average >= 80 && $status == "Pass")
    ? "Eligible"
    : "Not Eligible";

// Report

echo PHP_EOL;
echo "STUDENT RESULT REPORT" . PHP_EOL;
echo PHP_EOL;

echo "Name        : $name" . PHP_EOL;
echo "Roll        : $roll" . PHP_EOL;
echo "Department  : $department" . PHP_EOL;

echo PHP_EOL;

echo "Bangla      : $bangla" . PHP_EOL;
echo "English     : $english" . PHP_EOL;
echo "Math        : $math" . PHP_EOL;
echo "Science     : $science" . PHP_EOL;
echo "ICT         : $ict" . PHP_EOL;

echo PHP_EOL;

echo "Total       : $total" . PHP_EOL;
echo "Average     : $average" . PHP_EOL;
echo "Grade       : $grade" . PHP_EOL;
echo "Result      : $status" . PHP_EOL;
echo "Scholarship : $scholarship" . PHP_EOL;

echo PHP_EOL;
echo "Analysis Completed Successfully." . PHP_EOL;