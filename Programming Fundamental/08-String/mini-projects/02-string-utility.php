<?php

/*

Mini Project 02 - String Utility

Features

- Replace Spaces with Hyphens
- Remove Extra Spaces
- Replace a Word
- Search a Word
- Count a Word
- Extract Part of Text
- Split Text into Words
- Join Words with Comma
- Compare Two Strings
- Exit

*/

define("PROJECT_TITLE", "STRING UTILITY");

echo PHP_EOL;
echo PROJECT_TITLE . PHP_EOL;
echo PHP_EOL;

$text = trim(readline("Enter Your Text: "));

if ($text == "") {
    echo "Text cannot be empty." . PHP_EOL;
    exit;
}

$choice = 0;

do {

    echo PHP_EOL;

    echo "1. Replace Spaces with Hyphens" . PHP_EOL;
    echo "2. Remove Extra Spaces" . PHP_EOL;
    echo "3. Replace a Word" . PHP_EOL;
    echo "4. Search a Word" . PHP_EOL;
    echo "5. Count a Word" . PHP_EOL;
    echo "6. Extract Part of Text" . PHP_EOL;
    echo "7. Split Text into Words" . PHP_EOL;
    echo "8. Join Words with Comma" . PHP_EOL;
    echo "9. Compare Two Strings" . PHP_EOL;
    echo "10. Exit" . PHP_EOL;

    echo PHP_EOL;

    $choice = (int) readline("Enter Your Choice: ");

    echo PHP_EOL;

    switch ($choice) {

        case 1:
            replaceSpaces($text);
            break;

        case 2:
            removeExtraSpaces($text);
            break;

        case 3:
            replaceWord($text);
            break;

        case 4:
            searchWord($text);
            break;

        case 5:
            countWord($text);
            break;

        case 6:
            extractText($text);
            break;

        case 7:
            splitText($text);
            break;

        case 8:
            joinText($text);
            break;

        case 9:
            compareStrings($text);
            break;

        case 10:
            echo "Thank you for using " . PROJECT_TITLE . "." . PHP_EOL;
            break;

        default:
            echo "Invalid Choice! Please try again." . PHP_EOL;
    }

} while ($choice != 10);


// Replace Spaces with Hyphens

function replaceSpaces(&$text)
{
    $text = str_replace(" ", "-", $text);

    echo "Updated Text: " . $text . PHP_EOL;
}


// Remove Extra Spaces

function removeExtraSpaces(&$text)
{
    $text = trim($text);

    echo "Updated Text: " . $text . PHP_EOL;
}


// Replace a Word

function replaceWord(&$text)
{
    $search = readline("Enter Word to Replace: ");
    $replace = readline("Enter New Word: ");

    $text = str_replace($search, $replace, $text);

    echo "Updated Text: " . $text . PHP_EOL;
}


// Search a Word

function searchWord($text)
{
    $search = readline("Enter Word to Search: ");

    if (stripos($text, $search) !== false) {
        echo "Word Found." . PHP_EOL;
    } else {
        echo "Word Not Found." . PHP_EOL;
    }
}


// Count a Word

function countWord($text)
{
    $search = readline("Enter Word to Count: ");

    $count = substr_count(
        strtolower($text),
        strtolower($search)
    );

    echo "Total Occurrences: " . $count . PHP_EOL;
}


// Extract Part of Text

function extractText($text)
{
    $start = (int) readline("Enter Start Position: ");
    $length = (int) readline("Enter Length: ");

    echo "Extracted Text: ";
    echo substr($text, $start, $length) . PHP_EOL;
}


// Split Text into Words

function splitText($text)
{
    $words = explode(" ", $text);

    echo "Words:" . PHP_EOL;

    foreach ($words as $word) {
        echo $word . PHP_EOL;
    }
}


// Join Words with Comma

function joinText($text)
{
    $words = explode(" ", $text);

    echo "Joined Text: ";
    echo implode(", ", $words) . PHP_EOL;
}


// Compare Two Strings

function compareStrings($text)
{
    $anotherText = readline("Enter Another Text: ");

    if (strcmp($text, $anotherText) == 0) {
        echo "Both Strings Are Equal." . PHP_EOL;
    } else {
        echo "Both Strings Are Different." . PHP_EOL;
    }
}