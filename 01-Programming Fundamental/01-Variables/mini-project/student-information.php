<?php
/* 
Store :
Student Name,Age,Department,University,Semester,Section,Student ID,CGPA,Country,Email.

use : 
Variables,Constants,Concatenation,Interpolation,PHP_EOL
*/

//solution
$name = readline("Enter Student Name: ");
$age = readline("Enter Age: ");
$department = readline("Enter Department: ");
$university = readline("Enter University: ");
$semester = readline("Enter Semester: ");
$section = readline("Enter Section: ");
$studentId = readline("Enter Student ID: ");
$cgpa = readline("Enter CGPA: ");
$country = readline("Enter Country: ");
$email = readline("Enter Email: ");

//constants
define("APP_NAME", "Fresher Programmer");
define("VERSION", "1.0.0");

echo "Student Information" . PHP_EOL;

// Concatenation
echo "Name         : " . $name . PHP_EOL;
echo "Age          : " . $age . PHP_EOL;

// Interpolation
echo "Department   : $department" . PHP_EOL;
echo "University   : $university" . PHP_EOL;
echo "Semester     : $semester" . PHP_EOL;
echo "Section      : $section" . PHP_EOL;
echo "Student ID   : $studentId" . PHP_EOL;
echo "CGPA         : $cgpa" . PHP_EOL;
echo "Country      : $country" . PHP_EOL;
echo "Email        : $email" . PHP_EOL . PHP_EOL;

echo "Application  : " . APP_NAME . PHP_EOL;
echo "Version      : " . VERSION . PHP_EOL . PHP_EOL;
