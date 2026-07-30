<?php

//Student Information

$name = "Sohug";
$age = 23;
$department = "CSE";
$university = "City University";
$cgpa = 3.85;

// Method 1: Print each variable separately

echo "===== Method 1 =====";
echo PHP_EOL;

echo $name;
echo PHP_EOL;

echo $age;
echo PHP_EOL;

echo $department;
echo PHP_EOL;

echo $university;
echo PHP_EOL;

echo $cgpa;
echo PHP_EOL;

echo PHP_EOL;


// Method 2: String Concatenation

echo "==== Method 2 ====";
echo PHP_EOL;

echo "Name: $name" . PHP_EOL; //Use ".(dot)" for add String (Name) and Variable (name) together
echo "Age: " . $age . PHP_EOL;
echo "Department: " . $department . PHP_EOL;
echo "University: " . $university . PHP_EOL;
echo "CGPA: " . $cgpa . PHP_EOL;

echo PHP_EOL;


// Method 3: Variable Interpolation

echo "===== Method 3 =====";
echo PHP_EOL;

echo "Name: $name" . PHP_EOL; //varriable in double quotes("")
echo "Age: $age" . PHP_EOL;
echo "Department: $department" . PHP_EOL;
echo "University: $university" . PHP_EOL;
echo "CGPA: $cgpa" . PHP_EOL;


       //INFORMATION

//Simple output → Interpolation ("Hello $name")

//Calculation, function call, complex expression → Concatenation (.)


/* 
1. Syntax:

Concatenation->

echo "Age: " . $age;

Interpolation->
echo "Age: $age";

Interpolation..less code need.

2. Double Quotes 

Interpolation works only double quotes 

Allow:

echo "Name: $name";

Not worked:

echo 'Name: $name';

Output 

Name: $name

cause single quotes don't parse 

3. Complex Expression

Concatenation-

echo "Next Age: " . ($age + 1);

Output

Next Age: 22

Interpolation- don't do it

echo "Next Age: $age + 1";

Output

Next Age: 21 + 1

cause $age replace but +1  not.

write clearly:

echo "Next Age: " . ($age + 1);


4. Object/Array

Interpolation-{}

$user = [
    "name" => "Sohug"
];

echo "Name: {$user['name']}";

Concatenation-

echo "Name: " . $user['name'];
*/