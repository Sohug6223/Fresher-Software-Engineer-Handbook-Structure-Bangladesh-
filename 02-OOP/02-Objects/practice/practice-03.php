<?php

/*

 Practice accessing object properties.

 Instructions:

 Create an object for each class.

 Assign values to every property.

 Display all property values.


 1. Airplane

    Properties:
    - airline
    - model


 2. Movie

    Properties:
    - title
    - director


 3. University

    Properties:
    - name
    - location


 4. Hotel

    Properties:
    - name
    - city


 5. Course

    Properties:
    - title
    - code


 Rules:

 - Create one object for each class.
 - Assign values to every property.
 - Display all property values using echo.
 - Use the object operator (->).

*/

// Solution

class Airplane
{
  public $airline;
  public $model;
}

class Movie
{
    public $title;
    public $director;
}

class University
{
    public $name;
    public $location;
}

class Hotel
{
    public $name;
    public $city;
}

class Course
{
    public $title;
    public $code;
}

$airplane = new Airplane();

$airplane->airline = "Biman Bangladesh Airlines";
$airplane->model = "Boeing 787";

echo "Airplane".PHP_EOL;
echo "Airline: " . $airplane->airline . PHP_EOL;
echo "Model: " . $airplane->model . PHP_EOL;
echo PHP_EOL;


$movie = new Movie();

$movie->title = "Inception";
$movie->director = "Christopher Nolan";

echo "Movie".PHP_EOL;
echo "Title: " . $movie->title . PHP_EOL;
echo "Director: " . $movie->director . PHP_EOL;
echo PHP_EOL;


$university = new University();

$university->name = "City University";
$university->location = "Dhaka";

echo "University".PHP_EOL;
echo "Name: " . $university->name . PHP_EOL;
echo "Location: " . $university->location . PHP_EOL;
echo PHP_EOL;


$hotel = new Hotel();

$hotel->name = "Sea Pearl Beach Resort";
$hotel->city = "Cox's Bazar";

echo "Hotel" . PHP_EOL;
echo "Name: " . $hotel->name . PHP_EOL;
echo "City: " . $hotel->city . PHP_EOL;

echo PHP_EOL;


$course = new Course();

$course->title = "Object-Oriented Programming";
$course->code = "CSE-221";

echo "Course" . PHP_EOL;
echo "Title: " . $course->title . PHP_EOL;
echo "Code: " . $course->code . PHP_EOL;