<?php
/*
Array Practical Example

Arrays are widely used to store collections of related data.

This file contains simple real-world examples of using arrays.
*/

// Student Names

$students = [
  "Sohug",
  "Sajib",
  "Mahir",
  "Talha"
];

echo "Student Names" . PHP_EOL;
foreach ($students as $student){
  echo $student . PHP_EOL;
}
echo PHP_EOL;

//Product List

$products = [
  "Laptop",
  "Mouse",
  "Keyboard",
  "Monitor"
];

echo "Products" .PHP_EOL;

foreach ($products as $product){
  echo "- ".$product .PHP_EOL;
}
echo PHP_EOL;

// Student Information

$student = [
    "Name" => "Sohug",
    "Department" => "CSE",
    "University" => "City University Bangladesh",
    "CGPA" => 3.85
];

echo "Student Information" . PHP_EOL;

foreach ($student as $key => $value) {
    echo $key . " : " . $value . PHP_EOL;
}

echo PHP_EOL;

// Shopping Cart

$cart = [
    "Laptop",
    "Mouse",
    "Headphone"
];

echo "Shopping Cart" . PHP_EOL;

foreach ($cart as $item) {
    echo "- " . $item . PHP_EOL;
}

echo PHP_EOL;

echo "Total Items : " . count($cart) . PHP_EOL;

echo PHP_EOL;

// Student Result


$marks = [
    80,
    75,
    90,
    85
];

$total = 0;

foreach ($marks as $mark) {
    $total += $mark;
}

$average = $total / count($marks);

echo "Student Result" . PHP_EOL;

echo "Total   : " . $total . PHP_EOL;
echo "Average : " . number_format($average, 2) . PHP_EOL;

echo PHP_EOL;

// Employee List

$employees = [

    [
        "Rahim",
        "Manager"
    ],

    [
        "Karim",
        "Developer"
    ],

    [
        "Sakib",
        "Designer"
    ]

];

echo "Employees" . PHP_EOL;

foreach ($employees as $employee) {

    echo "Name : " . $employee[0] . PHP_EOL;
    echo "Role : " . $employee[1] . PHP_EOL;

    echo PHP_EOL;
}

 // Stock Filter

$catalog = [
    [
        "id" => 1,
        "name" => "PHP Cookbook",
        "category" => "Books",
        "price" => 550,
        "in_stock" => true
    ],
    [
        "id" => 2,
        "name" => "Ergonomic Chair",
        "category" => "Furniture",
        "price" => 12500,
        "in_stock" => false
    ],
    [
        "id" => 3,
        "name" => "Mechanical Keyboard",
        "category" => "Electronics",
        "price" => 3500,
        "in_stock" => true
    ],
    [
        "id" => 4,
        "name" => "USB-C Hub",
        "category" => "Electronics",
        "price" => 1800,
        "in_stock" => true
    ]
];

echo "\n";
echo "AVAILABLE PRODUCTS (IN STOCK)\n";
echo "\n";

$available_count = 0;
$total_inventory_value = 0;

foreach ($catalog as $product) {
    
    if ($product["in_stock"] === true) {
        $available_count++;
        $total_inventory_value += $product["price"];

        echo "ID: #{$product['id']}\n";
        echo "Product: {$product['name']} ({$product['category']})\n";
        echo "Price: {$product['price']} BDT\n";
        echo "\n";
    }
}

echo "\nInventory Summary:\n";
echo "Total In-Stock Items: " . $available_count . "\n";
echo "Total Stock Value: " . $total_inventory_value . " BDT\n";
echo "\n";