<?php

/*

Default Parameters

A default parameter provides a predefined value.
If no argument is passed, the default value is used.

*/

// Example 1: Default Parameter

function greet($name = "Guest")
{
    echo "Hello, " . $name . "!" . PHP_EOL;
}

echo "Example 1" . PHP_EOL;

greet();
greet("Sohug");

echo PHP_EOL;

// Example 2: Multiple Default Parameters

function student($name = "Unknown", $department = "CSE")
{
    echo "Name       : " . $name . PHP_EOL;
    echo "Department : " . $department . PHP_EOL;
}

echo "Example 2" . PHP_EOL;

student();
student("Sohug");
student("Sajib", "EEE");

echo PHP_EOL;

// Example 3: Online Order

function orderSummary($product = "Laptop", $quantity = 1)
{
    echo "Product  : " . $product . PHP_EOL;
    echo "Quantity : " . $quantity . PHP_EOL;
}

echo "Example 3" . PHP_EOL;

orderSummary();
orderSummary("Mouse");
orderSummary("Keyboard", 2);

echo PHP_EOL;

// Example 4: Delivery Charge

function deliveryCharge($location = "Dhaka")
{
    if ($location == "Dhaka") {
        echo "Delivery Charge: 60 BDT" . PHP_EOL;
    } 
    else {
        echo "Delivery Charge: 130 BDT" . PHP_EOL;
    }
}

echo "Example 4" . PHP_EOL;

deliveryCharge();
deliveryCharge("Khulna");