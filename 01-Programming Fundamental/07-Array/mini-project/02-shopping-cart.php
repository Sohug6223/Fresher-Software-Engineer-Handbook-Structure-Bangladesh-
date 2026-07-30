<?php

/*

Mini Project 02 - Inventory Management System

Features

- Add Product
- View All Products
- Search Product
- Count Total Products
- Calculate Total Inventory Value
- Exit

*/

define("PROJECT_TITLE", "INVENTORY MANAGEMENT SYSTEM");

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;

$products = [

    [
        "Name" => "Laptop",
        "Brand" => "Dell",
        "Price" => 65000
    ],

    [
        "Name" => "Mouse",
        "Brand" => "Logitech",
        "Price" => 1200
    ],

    [
        "Name" => "Keyboard",
        "Brand" => "A4Tech",
        "Price" => 1800
    ]

];

$choice = 0;

do {

    echo PHP_EOL;

    echo "1. Add Product" . PHP_EOL;
    echo "2. View All Products" . PHP_EOL;
    echo "3. Search Product" . PHP_EOL;
    echo "4. Count Total Products" . PHP_EOL;
    echo "5. Total Inventory Value" . PHP_EOL;
    echo "6. Exit" . PHP_EOL;

    echo PHP_EOL;

    $choice = (int) readline("Enter Your Choice: ");

    echo PHP_EOL;

    switch ($choice) {

        case 1:
            addProduct($products);
            break;

        case 2:
            viewProducts($products);
            break;

        case 3:
            searchProduct($products);
            break;

        case 4:
            countProducts($products);
            break;

        case 5:
            totalInventoryValue($products);
            break;

        case 6:
            echo "Thank you for using " . PROJECT_TITLE . "." . PHP_EOL;
            break;

        default:
            echo "Invalid Choice! Please try again." . PHP_EOL;
    }

} while ($choice != 6);

function addProduct(&$products)
{
    $name = trim(readline("Enter Product Name: "));
    $brand = trim(readline("Enter Brand Name: "));
    $price = (float) readline("Enter Product Price: ");
    if ($name == "" || $brand == "") {

    echo PHP_EOL;
    echo "Product Name and Brand cannot be empty." . PHP_EOL;

    return;
}

if ($price <= 0) {

    echo PHP_EOL;
    echo "Invalid Product Price." . PHP_EOL;

    return;
}

    $products[] = [
        "Name" => $name,
        "Brand" => $brand,
        "Price" => $price
    ];

    echo PHP_EOL;
    echo "Product Added Successfully!" . PHP_EOL;
}

function viewProducts($products)
{
    if (count($products) == 0) {
        echo "No Products Found." . PHP_EOL;
        return;
    }

    echo "PRODUCT LIST" . PHP_EOL;

    foreach ($products as $index => $product) {

        echo PHP_EOL;
        echo "Product #" . ($index + 1) . PHP_EOL;
        echo "Name  : " . $product["Name"] . PHP_EOL;
        echo "Brand : " . $product["Brand"] . PHP_EOL;
        echo "Price : " . $product["Price"] . PHP_EOL;
    }
}

function searchProduct($products)
{
    $search = strtolower(readline("Enter Product Name: "));

    $found = false;

    foreach ($products as $product) {

        if (strtolower($product["Name"]) == $search) {

            echo PHP_EOL;
            echo "Product Found!" . PHP_EOL;
            echo "Name  : " . $product["Name"] . PHP_EOL;
            echo "Brand : " . $product["Brand"] . PHP_EOL;
            echo "Price : " . $product["Price"] . PHP_EOL;

            $found = true;
            break;
        }
    }

    if (!$found) {
        echo "Product Not Found." . PHP_EOL;
    }
}

function countProducts($products)
{
    echo "Total Products: " . count($products) . PHP_EOL;
}

function totalInventoryValue($products)
{
    $total = 0;

    foreach ($products as $product) {
        $total += $product["Price"];
    }

    echo "Total Inventory Value: " . $total . PHP_EOL;
}