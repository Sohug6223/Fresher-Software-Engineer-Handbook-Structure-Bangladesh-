<?php

/*

 Mini Project: School Management System


 Project Objective:

 Design the classes for a simple School Management System.

 Think about what properties and methods each class should have.


 Instructions:

 Create the following classes:

 1. School
 2. Teacher
 3. Student
 4. Subject
 5. Classroom


 Rules:

 - Create meaningful class names.
 - Use the public access modifier.
 - Add appropriate properties.
 - Add appropriate methods.
 - Do NOT create any objects.
 - Do NOT use constructors.
 - Keep each class focused on a single responsibility.

*/


// Solution

class School
{
    public $name;
    public $address;
    public $principal;
    public $totalStudents;

    public function admitStudent()
    {
    }

    public function hireTeacher()
    {
    }

    public function organizeEvent()
    {
    }

    public function publishNotice()
    {
    }
}

class Teacher
{
    public $name;
    public $employeeId;
    public $subject;
    public $salary;

    public function teach()
    {
    }

    public function takeAttendance()
    {
    }

    public function assignHomework()
    {
    }

    public function evaluateExam()
    {
    }
}

class Student
{
    public $name;
    public $studentId;
    public $class;
    public $section;

    public function attendClass()
    {
    }

    public function submitAssignment()
    {
    }

    public function takeExam()
    {
    }

    public function viewResult()
    {
    }
}

class Subject
{
    public $name;
    public $code;
    public $credit;
    public $teacher;

    public function assignTeacher()
    {
    }

    public function updateSyllabus()
    {
    }

    public function scheduleExam()
    {
    }
}

class Classroom
{
    public $roomNumber;
    public $building;
    public $capacity;
    public $floor;

    public function allocateRoom()
    {
    }

    public function cleanRoom()
    {
    }

    public function lockRoom()
    {
    }
}