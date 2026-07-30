<?php

/*

Practice 05 - Interview Style String Problems

Task 1

Replace all spaces with hyphens.

Hint:

str_replace()


Task 2

Remove extra spaces from both sides.

Hint:

trim()


Task 3

Extract the file extension.

Example:

photo.jpg

Output:

jpg

Hint:

substr()


Task 4

Split an email address.

Store the username and domain into separate variables.

Hint:

explode()


Task 5

Convert an array of skills into a comma-separated string.

Hint:

implode()


Task 6

Check whether an email ends with .com

Hint:

str_ends_with()


Task 7

Format a student's CGPA using two decimal places.

Hint:

printf()

or

number_format()


Task 8

Print a separator using str_repeat()

Example:

==============================

*/

//solution

// Task 1

$text = "PHP is easy to learn";

echo "Task 1" . PHP_EOL;
echo str_replace(" ", "-", $text) . PHP_EOL;

echo PHP_EOL;

// Task 2

$text = "     Welcome to PHP!     ";

echo "Task 2" . PHP_EOL;
echo trim($text) . PHP_EOL;

echo PHP_EOL;

// Task 3

$file = "photo.jpg";

echo "Task 3" . PHP_EOL;
echo substr($file, -3) . PHP_EOL;

echo PHP_EOL;

// Task 4

$email = "sohug@gmail.com";

[$username, $domain] = explode("@", $email);

//list($username, $domain) = explode("@", $email);

echo "Task 4" . PHP_EOL;
echo "Username: " . $username . PHP_EOL;
echo "Domain  : " . $domain . PHP_EOL;

echo PHP_EOL;

// Task 5

$skills = ["PHP", "Laravel", "MySQL", "JavaScript"];

echo "Task 5" . PHP_EOL;
echo implode(", ", $skills) . PHP_EOL;

echo PHP_EOL;

// Task 6

echo "Task 6" . PHP_EOL;

if (str_ends_with($email, ".com")) {
    echo "Valid .com email" . PHP_EOL;
} else {
    echo "Not a .com email" . PHP_EOL;
}

echo PHP_EOL;


// Task 7

$cgpa = 3.8567;

echo "Task 7" . PHP_EOL;
printf("CGPA: %.2f\n", $cgpa);

// Alternative:
// echo number_format($cgpa, 2) . PHP_EOL;

echo PHP_EOL;

// Task 8

echo "Task 8" . PHP_EOL;
echo str_repeat("=", 30) . PHP_EOL;

echo PHP_EOL;