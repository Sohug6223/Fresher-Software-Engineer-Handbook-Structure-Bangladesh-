<?php

/*

Practice 04 - Explode and Implode

Task 1

Convert a comma-separated string into an array.

Hint:

explode()


Task 2

Convert a space-separated string into an array.

Hint:

explode()


Task 3

Convert an array into a comma-separated string.

Hint:

implode()


Task 4

Convert an array into a string using

" | " as the separator.

Hint:

implode()


Task 5

Split an email address using @

Hint:

explode()


Task 6

Split a file path using /

Hint:

explode()


Task 7

Convert a list of programming languages
into a string.

Hint:

implode()


Task 8

Convert a sentence into words.

Hint:

explode()


Task 9

Convert an array of names into a single string using -

Hint:

implode()


Task 10

Split a CSV string and print each value
using foreach.

Hint:

explode()

*/

//solution

// Task 1

$fruits = "Apple,Banana,Mango,Orange";

echo "Task 1" . PHP_EOL;
print_r(explode(",", $fruits));

echo PHP_EOL;

// Task 2

$text = "PHP Laravel MySQL JavaScript";

echo "Task 2" . PHP_EOL;
print_r(explode(" ", $text));

echo PHP_EOL;

// Task 3

$colors = ["Red", "Green", "Blue"];

echo "Task 3" . PHP_EOL;
echo implode(", ", $colors) . PHP_EOL;

echo PHP_EOL;

// Task 4: Convert an array into a string using " | "

$countries = ["Bangladesh", "India", "Nepal"];

echo "Task 4" . PHP_EOL;
echo implode(" | ", $countries) . PHP_EOL;

echo PHP_EOL;

// Task 5

$email = "sohug@gmail.com";

echo "Task 5" . PHP_EOL;
print_r(explode("@", $email));

echo PHP_EOL;

// Task 6

$path = "images/profile/photo.jpg";

echo "Task 6" . PHP_EOL;
print_r(explode("/", $path));

echo PHP_EOL;

// Task 7
$languages = ["PHP", "Laravel", "JavaScript", "MySQL"];

echo "Task 7" . PHP_EOL;
echo implode(", ", $languages) . PHP_EOL;

echo PHP_EOL;

// Task 8

$sentence = "PHP is easy to learn";

echo "Task 8" . PHP_EOL;
print_r(explode(" ", $sentence));

echo PHP_EOL;

// Task 9

$names = ["Sohug", "Rahim", "Karim"];

echo "Task 9" . PHP_EOL;
echo implode("-", $names) . PHP_EOL;

echo PHP_EOL;

// Task 10

$csv = "CSE,EEE,BBA,English";

$data = explode(",", $csv);

echo "Task 10" . PHP_EOL;

foreach ($data as $value) {
    echo $value . PHP_EOL;
}

echo PHP_EOL;