<?php

define("PROJECT_TITLE", "NUMBER-PATTERN GENERATOR");
define("PATTERN_SIZE", 5);

echo PHP_EOL;

echo PROJECT_TITLE . PHP_EOL;

$choice = 0;

do {

    echo PHP_EOL;
    echo "1. Square Pattern" . PHP_EOL;
    echo "2. Rectangle Pattern" . PHP_EOL;
    echo "3. Right Triangle" . PHP_EOL;
    echo "4. Inverted Triangle" . PHP_EOL;
    echo "5. Number Triangle" . PHP_EOL;
    echo "6. Exit" . PHP_EOL;

    echo PHP_EOL;

    $choice = (int)readline("Choice: ");

    echo PHP_EOL;

    switch ($choice) {

        case 1:
            echo "Square Pattern" . PHP_EOL . PHP_EOL;

            for ($row = 1; $row <= PATTERN_SIZE; $row++) {
                for ($col = 1; $col <= PATTERN_SIZE; $col++) {
                    echo "* ";
                }
                echo PHP_EOL;
            }

            break;

        case 2:
            echo "Rectangle Pattern" . PHP_EOL . PHP_EOL;

            for ($row = 1; $row <= 4; $row++) {
                for ($col = 1; $col <= 6; $col++) {
                    echo "* ";
                }
                echo PHP_EOL;
            }

            break;

        case 3:
            echo "Right Triangle" . PHP_EOL . PHP_EOL;

            for ($row = 1; $row <= PATTERN_SIZE; $row++) {
                for ($col = 1; $col <= $row; $col++) {
                    echo "* ";
                }
                echo PHP_EOL;
            }

            break;

        case 4:
            echo "Inverted Triangle" . PHP_EOL . PHP_EOL;

            for ($row = PATTERN_SIZE; $row >= 1; $row--) {
                for ($col = 1; $col <= $row; $col++) {
                    echo "* ";
                }
                echo PHP_EOL;
            }

            break;

        case 5:
            echo "Number Triangle" . PHP_EOL . PHP_EOL;

            for ($row = 1; $row <= PATTERN_SIZE; $row++) {
                for ($col = 1; $col <= $row; $col++) {
                    echo $col . " ";
                }
                echo PHP_EOL;
            }

            break;

        case 6:
            echo "Thank you for using Pattern Generator." . PHP_EOL;
            break;

        default:
            echo "Invalid Choice! Please try again." . PHP_EOL;
    }

} while ($choice != 6);