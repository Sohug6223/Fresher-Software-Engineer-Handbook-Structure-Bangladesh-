<?php

/*

 Practice calling object methods.


 Instructions:

 Create one object for each class.

 Call every method.


 1. Library

    Method:
    - borrowBook()


 2. Car

    Method:
    - startEngine()


 3. CoffeeShop

    Method:
    - serveCoffee()


 4. School

    Method:
    - startClass()


 5. Cinema

    Method:
    - playMovie()


 Rules:

 - Create one object for each class.
 - Call every method.
 - Use the object operator (->).

*/

// Solution
class Library
{
    public function borrowBook()
    {
        echo "Book borrowed successfully." . PHP_EOL;
    }
}

class Car
{
    public function startEngine()
    {
        echo "Engine started successfully." . PHP_EOL;
    }
}

class CoffeeShop
{
    public function serveCoffee()
    {
        echo "Coffee served successfully." . PHP_EOL;
    }
}

class School
{
    public function startClass()
    {
        echo "Class started successfully." . PHP_EOL;
    }
}

class Cinema
{
    public function playMovie()
    {
        echo "Movie is now playing." . PHP_EOL;
    }
}


$library = new Library();

echo "Library" . PHP_EOL;
$library->borrowBook();

echo PHP_EOL;


$car = new Car();

echo "Car" . PHP_EOL;
$car->startEngine();

echo PHP_EOL;


$coffeeShop = new CoffeeShop();

echo "Coffee Shop" . PHP_EOL;
$coffeeShop->serveCoffee();

echo PHP_EOL;


$school = new School();

echo "School" . PHP_EOL;
$school->startClass();

echo PHP_EOL;


$cinema = new Cinema();

echo "Cinema" . PHP_EOL;
$cinema->playMovie();