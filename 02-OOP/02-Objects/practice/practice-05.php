<?php

/*

 Instructions:

 Complete the following tasks for each class.

 1. Bank

    Properties:
    - name
    - branch

    Method:
    - openAccount()

 
    2. Hospital

    Properties:
    - name
    - city

    Method:
    - admitPatient()


 3. MobilePhone

    Properties:
    - brand
    - model

    Method:
    - makeCall()


 4. University

    Properties:
    - name
    - location

    Method:
    - startSemester()


 5. Airline

    Properties:
    - name
    - country

    Method:
    - scheduleFlight()


 Rules:

 - Create one object for each class.
 - Assign values to every property.
 - Display all property values.
 - Call every method.
 - Use the object operator (->).

*/

// Solution

class Bank
{
    public $name;
    public $branch;

    public function openAccount()
    {
        echo "Account opened successfully." . PHP_EOL;
    }
}

class Hospital
{
    public $name;
    public $city;

    public function admitPatient()
    {
        echo "Patient admitted successfully." . PHP_EOL;
    }
}

class MobilePhone
{
    public $brand;
    public $model;

    public function makeCall()
    {
        echo "Calling..." . PHP_EOL;
    }
}

class University
{
    public $name;
    public $location;

    public function startSemester()
    {
        echo "Semester started successfully." . PHP_EOL;
    }
}

class Airline
{
    public $name;
    public $country;

    public function scheduleFlight()
    {
        echo "Flight scheduled successfully." . PHP_EOL;
    }
}

$bank = new Bank();

$bank->name = "Dutch-Bangla Bank";
$bank->branch = "Mirpur";

echo "Bank" . PHP_EOL;
echo "Name: " . $bank->name . PHP_EOL;
echo "Branch: " . $bank->branch . PHP_EOL;
$bank->openAccount();

echo PHP_EOL;


$hospital = new Hospital();

$hospital->name = "Square Hospital";
$hospital->city = "Dhaka";

echo "Hospital" . PHP_EOL;
echo "Name: " . $hospital->name . PHP_EOL;
echo "City: " . $hospital->city . PHP_EOL;
$hospital->admitPatient();

echo PHP_EOL;


$phone = new MobilePhone();

$phone->brand = "Samsung";
$phone->model = "Galaxy S25";

echo "Mobile Phone" . PHP_EOL;
echo "Brand: " . $phone->brand . PHP_EOL;
echo "Model: " . $phone->model . PHP_EOL;
$phone->makeCall();

echo PHP_EOL;


$university = new University();

$university->name = "City University";
$university->location = "Dhaka";

echo "University" . PHP_EOL;
echo "Name: " . $university->name . PHP_EOL;
echo "Location: " . $university->location . PHP_EOL;
$university->startSemester();

echo PHP_EOL;


$airline = new Airline();

$airline->name = "Biman Bangladesh Airlines";
$airline->country = "Bangladesh";

echo "Airline" . PHP_EOL;
echo "Name: " . $airline->name . PHP_EOL;
echo "Country: " . $airline->country . PHP_EOL;
$airline->scheduleFlight();