<?php

// PHP Variable Naming Rules

/*
Rule 1:
Variable must start with $
*/
$name = "Sohug";

echo "Rule 1: Variable starts with $" . PHP_EOL;
echo $name . PHP_EOL;

echo PHP_EOL;


/*
Rule 2:
After $, the first character must be
a letter (A-Z, a-z) or an underscore (_)
*/

$student = "Sohug";
$_email = "sohug@example.com";

echo "Rule 2: First character after $ can be a letter or underscore" . PHP_EOL;

echo $student . PHP_EOL;
echo $_email . PHP_EOL;

echo PHP_EOL;


/*
Rule 3:
Variable name cannot start with a number
*/

/*

❌ Invalid

$1name = "Sohug";

*/


/*
Rule 4:
Variable names can contain numbers,
but not as the first character.
*/

$student1 = "Sohug";
$student2 = "Sajib";

echo "Rule 4: Numbers are allowed after the first character" . PHP_EOL;

echo $student1 . PHP_EOL;
echo $student2 . PHP_EOL;

echo PHP_EOL;


/*
Rule 5:
Spaces are not allowed.
*/

/*

❌ Invalid

$student name = "Sohug";

*/


/*
Rule 6:
Special characters are not allowed.

Allowed:
_

Not Allowed:
-
!
@
#
$
%
&
*
*/

$student_name = "Sohug";

echo "Rule 6: Underscore (_) is allowed." . PHP_EOL;
echo $student_name . PHP_EOL;

echo PHP_EOL;


/*
Rule 7:
Variable names are case-sensitive.
*/

$name = "Sohug";
$Name = "Rahim";
$NAME = "Karim";

echo "Rule 7: Variables are case-sensitive." . PHP_EOL;

echo $name . PHP_EOL;
echo $Name . PHP_EOL;
echo $NAME . PHP_EOL;

echo PHP_EOL;


/*
Rule 8:
Use meaningful variable names.
*/

$studentName = "Sohug";
$studentAge = 23;

echo "Rule 8: Use meaningful variable names." . PHP_EOL;

echo $studentName . PHP_EOL;
echo $studentAge . PHP_EOL;