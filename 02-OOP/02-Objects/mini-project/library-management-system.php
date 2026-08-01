<?php

/*

Project Objective:

 Create and use objects for a simple Library Management System.


 Instructions:

 Create the following classes:

 1. Library
 2. Book
 3. Member


 Library

 Properties:
 - name
 - location

 Method:
 - openLibrary()


 Book

 Properties:
 - title
 - author

 Method:
 - borrowBook()


 Member

 Properties:
 - name
 - memberId

 Method:
 - visitLibrary()


 Tasks:

 1. Create one object from each class.

 2. Assign values to every property.

 3. Display all property values.

 4. Call every method.


 Rules:

 - Do NOT use constructors.
 - Do NOT use parameters.
 - Do NOT use return types.
 - Use the object operator (->).

*/


class Library
{
    public $name;
    public $location;

    public function openLibrary()
    {
        echo "Library is now open." . PHP_EOL;
    }
}

class Book
{
    public $title;
    public $author;

    public function borrowBook()
    {
        echo "Book borrowed successfully." . PHP_EOL;
    }
}

class Member
{
    public $name;
    public $memberId;

    public function visitLibrary()
    {
        echo "Member visited the library." . PHP_EOL;
    }
}

//Create Objects

$library = new Library();
$book = new Book();
$member = new Member();


// Assign Property Values


$library->name = "City Central Library";
$library->location = "Khagan,Birulia,Savar";

$book->title = "Clean Code";
$book->author = "Robert C. Martin";

$member->name = "Sohug";
$member->memberId = "M-101";


// Display Information


echo "Library" . PHP_EOL;
echo "Name: " . $library->name . PHP_EOL;
echo "Location: " . $library->location . PHP_EOL;
$library->openLibrary();

echo PHP_EOL;

echo "Book" . PHP_EOL;
echo "Title: " . $book->title . PHP_EOL;
echo "Author: " . $book->author . PHP_EOL;
$book->borrowBook();

echo PHP_EOL;

echo "Member" . PHP_EOL;
echo "Name: " . $member->name . PHP_EOL;
echo "Member ID: " . $member->memberId . PHP_EOL;
$member->visitLibrary();