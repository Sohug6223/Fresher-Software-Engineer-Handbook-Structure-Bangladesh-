<?php


class Student
{
    public $name;
    public $department;
    public $cgpa;
}

// Creating Multiple Objects

$student1 = new Student();
$student2 = new Student();
$student3 = new Student();
$student4 = new Student();
$student5 = new Student();

// Assigning Different Data

$student1->name = "Sohug";
$student1->department = "CSE";
$student1->cgpa = 3.92;

$student2->name = "Rahim";
$student2->department = "EEE";
$student2->cgpa = 3.45;

$student3->name = "Karim";
$student3->department = "BBA";
$student3->cgpa = 3.68;

$student4->name = "Nusrat";
$student4->department = "English";
$student4->cgpa = 3.81;

$student5->name = "Arafat";
$student5->department = "Civil";
$student5->cgpa = 3.55;


echo "Student 1" . PHP_EOL;
echo "Name: " . $student1->name . PHP_EOL;
echo "Department: " . $student1->department . PHP_EOL;
echo "CGPA: " . $student1->cgpa . PHP_EOL;

echo PHP_EOL;

echo "Student 2" . PHP_EOL;
echo "Name: " . $student2->name . PHP_EOL;
echo "Department: " . $student2->department . PHP_EOL;
echo "CGPA: " . $student2->cgpa . PHP_EOL;

echo PHP_EOL;

echo "Student 3" . PHP_EOL;
echo "Name: " . $student3->name . PHP_EOL;
echo "Department: " . $student3->department . PHP_EOL;
echo "CGPA: " . $student3->cgpa . PHP_EOL;

echo PHP_EOL;

echo "Student 4" . PHP_EOL;
echo "Name: " . $student4->name . PHP_EOL;
echo "Department: " . $student4->department . PHP_EOL;
echo "CGPA: " . $student4->cgpa . PHP_EOL;

echo PHP_EOL;

echo "Student 5" . PHP_EOL;
echo "Name: " . $student5->name . PHP_EOL;
echo "Department: " . $student5->department . PHP_EOL;
echo "CGPA: " . $student5->cgpa . PHP_EOL;