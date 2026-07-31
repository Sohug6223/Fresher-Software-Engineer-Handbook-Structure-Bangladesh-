<?php

/*

 Final Challenge: Real-World Class Design


 Instructions:

 Design the following classes.

 Think about what properties and methods each class should have.

 You have to decide everything yourself.


 1. E-Commerce System

 2. School Management System

 3. Railway Reservation System

 4. Food Delivery System

 5. Online Banking System


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

class ECommerce
{
    public $storeName;
    public $owner;
    public $totalProducts;
    public $website;

    public function addProduct()
    {
    }

    public function removeProduct()
    {
    }

    public function processOrder()
    {
    }

    public function updateInventory()
    {
    }
}

class School
{
    public $name;
    public $location;
    public $principal;
    public $totalStudents;

    public function admitStudent()
    {
    }

    public function assignTeacher()
    {
    }

    public function conductExam()
    {
    }

    public function publishResult()
    {
    }
}

class RailwayReservation
{
    public $trainName;
    public $route;
    public $totalSeats;
    public $ticketPrice;

    public function bookTicket()
    {
    }

    public function cancelTicket()
    {
    }

    public function checkSeatAvailability()
    {
    }

    public function generateTicket()
    {
    }
}

class FoodDelivery
{
    public $restaurantName;
    public $deliveryArea;
    public $deliveryFee;
    public $estimatedTime;

    public function placeOrder()
    {
    }

    public function assignDeliveryRider()
    {
    }

    public function trackOrder()
    {
    }

    public function deliverOrder()
    {
    }
}

class OnlineBanking
{
    public $bankName;
    public $accountNumber;
    public $accountHolder;
    public $balance;

    public function deposit()
    {
    }

    public function withdraw()
    {
    }

    public function transferMoney()
    {
    }

    public function checkBalance()
    {
    }
}