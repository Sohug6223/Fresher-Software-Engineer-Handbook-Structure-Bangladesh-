<?php

define("PROJECT_TITLE", "MULTIPLICATION TABLE GENERATOR");
define("TABLE_LIMIT", 10);

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;
echo  PHP_EOL . PHP_EOL;

// Main Program

$choice = 1;

do {
    // User Input
    
   $number = (int) readline("Enter a Number: ");

    echo PHP_EOL;

    // Multiplication Table

    for ($i = 1; $i <= TABLE_LIMIT; $i++) {
        echo $number . " x " . $i . " = " . ($number * $i) . PHP_EOL;
    }
    
    // Continue Menu
    
    echo PHP_EOL . PHP_EOL;

    echo "Generate Another Table?" . PHP_EOL . PHP_EOL;
    echo "1. Yes" . PHP_EOL;
    echo "2. No" . PHP_EOL . PHP_EOL;

    $choice = (int) readline("Choice: ");

    echo PHP_EOL;

} while ($choice == 1);

// Exit Message

echo "Thank you for using " . PROJECT_TITLE . "." . PHP_EOL;