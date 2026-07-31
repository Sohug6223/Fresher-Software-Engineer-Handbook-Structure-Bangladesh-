<?php

// Example 1: Student

class Student
{
    public function study()
    {
        echo "Student is studying." . PHP_EOL;
    }
}

$student = new Student();

echo "Student" . PHP_EOL;
$student->study();

echo PHP_EOL;
  

// Example 2: Teacher

class Teacher
{
    public function teach()
    {
        echo "Teacher is teaching." . PHP_EOL;
    }
}

$teacher = new Teacher();

echo "Teacher" . PHP_EOL;
$teacher->teach();

echo PHP_EOL;

// Example 3: Restaurant

class Restaurant
{
    public function takeOrder()
    {
        echo "Order has been received." . PHP_EOL;
    }
}

$restaurant = new Restaurant();

echo "Restaurant" . PHP_EOL;
$restaurant->takeOrder();

echo PHP_EOL;


// Example 4: Hospital

class Hospital
{
    public function admitPatient()
    {
        echo "Patient admitted successfully." . PHP_EOL;
    }
}

$hospital = new Hospital();

echo "Hospital" . PHP_EOL;
$hospital->admitPatient();

echo PHP_EOL;

// Example 5: Gym

class Gym
{
    public function openGym()
    {
        echo "Gym is now open." . PHP_EOL;
    }
}

$gym = new Gym();

echo "Gym" . PHP_EOL;
$gym->openGym();

echo PHP_EOL;

// Example 6: Movie

class Movie
{
    public function play()
    {
        echo "Movie is now playing." . PHP_EOL;
    }
}

$movie = new Movie();

echo "Movie" . PHP_EOL;
$movie->play();