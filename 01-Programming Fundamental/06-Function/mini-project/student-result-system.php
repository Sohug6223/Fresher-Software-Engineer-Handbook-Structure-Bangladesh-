<?php

/*

 Mini Project 02 - Student Result System

 Features

 - Student Information
 - Total Marks
 - Average Marks
 - Grade
 - Pass / Fail

*/

define("PROJECT_TITLE", "STUDENT RESULT SYSTEM");
define("PASS_MARK", 40);

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;
echo PHP_EOL;

// Student Information

$studentName = readline("Enter Student Name : ");

echo PHP_EOL;

$bangla = (int) readline("Bangla Marks : ");
$english = (int) readline("English Marks: ");
$math = (int) readline("Math Marks   : ");
$ict = (int) readline("ICT Marks    : ");

echo PHP_EOL;

// Processing

$total = calculateTotal($bangla, $english, $math, $ict);

$average = calculateAverage($total);

$grade = calculateGrade($bangla,
    $english,$math,$ict,$average);

$result = checkResult($bangla, $english, $math, $ict);

// Report

printReport(
    $studentName,
    $bangla,
    $english,
    $math,
    $ict,
    $total,
    $average,
    $grade,
    $result
);

// Functions

function calculateTotal(
    int $bangla,
    int $english,
    int $math,
    int $ict
): int {

    return $bangla + $english + $math + $ict;
}

function calculateAverage(int $total): float
{
    return $total / 4;
}

function calculateGrade(
    int $bangla,
    int $english,
    int $math,
    int $ict,
    float $average
):string
{
  if (
        $bangla < PASS_MARK ||
        $english < PASS_MARK ||
        $math < PASS_MARK ||
        $ict < PASS_MARK
    ) {
        return "F";
    }
    if ($average >= 80) {
        return "A+";
    }

    if ($average >= 70) {
        return "A";
    }

    if ($average >= 60) {
        return "A-";
    }

    if ($average >= 50) {
        return "B";
    }

        return "C";
}

function checkResult(
    int $bangla,
    int $english,
    int $math,
    int $ict
): string {

    if (
        $bangla < PASS_MARK ||
        $english < PASS_MARK ||
        $math < PASS_MARK ||
        $ict < PASS_MARK
    ) {
        return "FAIL";
    }

    return "PASS";
}

function printReport(
    string $studentName,
    int $bangla,
    int $english,
    int $math,
    int $ict,
    int $total,
    float $average,
    string $grade,
    string $result
) {
 
    echo "RESULT REPORT" . PHP_EOL;
    echo "Student Name : " . $studentName . PHP_EOL;

    echo PHP_EOL;

    echo "Bangla       : " . $bangla . PHP_EOL;
    echo "English      : " . $english . PHP_EOL;
    echo "Math         : " . $math . PHP_EOL;
    echo "ICT          : " . $ict . PHP_EOL;

    echo "Total        : " . $total . PHP_EOL;
    echo "Average      : " . number_format($average, 2) . PHP_EOL;
    echo "Grade        : " . $grade . PHP_EOL;
    echo "Result       : " . $result . PHP_EOL;
}