<?php

/*

Practice 03 - String Comparison and Formatting

Task 1

Compare two strings.

Hint:

strcmp()


Task 2

Compare two strings (ignore case).

Hint:

strcasecmp()


Task 3

Compare two strings using natural order.

Hint:

strnatcmp()


Task 4

Print a student's name and CGPA using printf().

Hint:

printf()


Task 5

Create a formatted string using sprintf().

Hint:

sprintf()


Task 6

Format a price with 2 decimal places.

Hint:

number_format()


Task 7

Format a large number with thousands separator.

Hint:

number_format()


Task 8

Pad a student ID with leading zeros.

Hint:

str_pad()


Task 9

Print 30 stars.

Hint:

str_repeat()


Task 10

Create a simple student report using formatting functions.

*/

//solution

// Task 1

$text1 = "PHP";
$text2 = "Laravel";

echo "Task 1" . PHP_EOL;
$result = strcmp($text1, $text2);

echo "Result: " . $result . PHP_EOL;

//echo strcmp($text1, $text2) . PHP_EOL;

echo PHP_EOL;

// Task 2

$text1 = "PHP";
$text2 = "php";

echo "Task 2" . PHP_EOL;
$result = strcasecmp($text1, $text2);

echo "Result: " . $result . PHP_EOL;

//echo strcasecmp($text1, $text2) . PHP_EOL;

echo PHP_EOL;

// Task 3

$file1 = "file2";
$file2 = "file10";

echo "Task 3" . PHP_EOL;
$result = strnatcmp($text1, $text2);

echo "Result: " . $result . PHP_EOL;

//echo strnatcmp($file1, $file2) . PHP_EOL;

echo PHP_EOL;

// Task 4

$name = "Sohug";
$cgpa = 3.85;

echo "Task 4" . PHP_EOL;
printf("Name: %s\n", $name);
printf("CGPA: %.2f\n", $cgpa);

echo PHP_EOL;

// Task 5

$name = "Rahim";
$department = "CSE";

$message = sprintf(
    "Student: %s | Department: %s",
    $name,
    $department
);

echo "Task 5" . PHP_EOL;
echo $message . PHP_EOL;

echo PHP_EOL;

// Task 6

$price = 1250.5;

echo "Task 6" . PHP_EOL;
echo number_format($price, 2) . PHP_EOL;

echo PHP_EOL;

// Task 7

$salary = 1250000;

echo "Task 7" . PHP_EOL;
echo number_format($salary) . PHP_EOL;

echo PHP_EOL;

// Task 8

$studentId = "25";

echo "Task 8" . PHP_EOL;
echo str_pad($studentId, 6, "0", STR_PAD_LEFT) . PHP_EOL;

echo PHP_EOL;

// Task 9

echo "Task 9" . PHP_EOL;
echo str_repeat("*", 30) . PHP_EOL;

echo PHP_EOL;

// Task 10

$name = "Sohug";
$department = "CSE";
$cgpa = 3.85;
$id = str_pad("25", 6, "0", STR_PAD_LEFT);

echo "Task 10" . PHP_EOL;
echo str_repeat("-", 35) . PHP_EOL;
printf("Student ID : %s\n", $id);
printf("Name       : %s\n", $name);
printf("Department : %s\n", $department);
printf("CGPA       : %.2f\n", $cgpa);

echo PHP_EOL;