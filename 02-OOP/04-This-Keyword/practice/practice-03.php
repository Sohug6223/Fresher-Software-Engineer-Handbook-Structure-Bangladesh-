<?php

/*

 Product Inventory Challenge

 Instructions:

 Create a Product class.


 Requirements:

 - Create the following properties:
   1. name
   2. category
   3. price

 - Create a constructor.
 - Store all constructor values using $this.
 - Create a method named showProduct().
 - Display all product information using the showProduct() method.
 - Create at least three product objects.
 - Call the showProduct() method for each object.

*/


// Solution

class Product
{
    public $name;
    public $category;
    public $price;

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }

    public function showProduct()
    {
        echo " Product Information " . PHP_EOL;
        echo "Product Name : " . $this->name . PHP_EOL;
        echo "Category     : " . $this->category . PHP_EOL;
        echo "Price        : BDT" . $this->price . PHP_EOL;
        echo PHP_EOL;
    }
}


// Create Product Objects

$product1 = new Product("Laptop", "Electronics", 850);
$product2 = new Product("Running Shoes", "Sports", 120);
$product3 = new Product("Coffee Mug", "Kitchen", 15);


// Display Product Information

$product1->showProduct();
$product2->showProduct();
$product3->showProduct();