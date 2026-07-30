# Strings in PHP

## What is a String?

A String is a sequence of characters enclosed in single quotes (`' '`) or double quotes (`" "`).

String হলো character এর sequence যা text represent করে।

Strings are used to store and manipulate text data in PHP.

Examples:

- Student Name
- Email Address
- Phone Number
- Password
- Product Name
- City Name
- Blog Title
- URL Slug


---

# Why are Strings Important?

Strings are one of the most frequently used data types in PHP.

Almost every real-world application works with text data.

Examples:

- User Registration
- Login System
- Search System
- Email Sending
- Product Management
- Blog System
- Chat Application
- Laravel Applications
- API Response Handling


Without strings, building dynamic web applications is impossible.


---

# String Syntax

## Single Quotes

Single quotes are used to store plain text.

```php
$name = 'Sohug';

echo $name;
```

Output:

```
Sohug
```


---

## Double Quotes

Double quotes support variable interpolation.

```php
$name = "Sohug";

echo "Hello $name";
```

Output:

```
Hello Sohug
```


---

# Single Quotes vs Double Quotes

## Single Quotes

- Variable interpolation does not work.
- Faster for simple text.
- Escape sequence support is limited.


Example:

```php
$name = "Sohug";

echo 'Hello $name';
```

Output:

```
Hello $name
```


---

## Double Quotes

- Variable interpolation works.
- Escape characters work.

Example:

```php
$name = "Sohug";

echo "Hello $name";
```

Output:

```
Hello Sohug
```


---

# Escape Characters

Escape characters allow special characters inside strings.

Examples:

```php
echo "I'm learning PHP";

echo "He said, \"PHP is awesome\"";

echo "C:\\xampp\\htdocs";
```


Common Escape Characters:

| Escape | Meaning |
|---|---|
| \n | New Line |
| \t | Tab |
| \" | Double Quote |
| \\ | Backslash |


---

# String Concatenation

Concatenation means joining two or more strings together.

PHP uses the dot (`.`) operator.


Example:

```php
$firstName = "Sohug";
$lastName = "Hossain";

echo $firstName . " " . $lastName;
```


Output:

```
Sohug Hossain
```


---

# Variable Interpolation

Variable interpolation means inserting variables directly inside double quoted strings.


Example:

```php
$name = "Sohug";

echo "Welcome $name";
```


Output:

```
Welcome Sohug
```


---

# String Functions

PHP provides many built-in functions to work with strings.


## Length Functions

### strlen()

Find string length.

```php
strlen("Hello PHP");
```


---

## Case Conversion Functions

### strtoupper()

Convert to uppercase.


### strtolower()

Convert to lowercase.


### ucfirst()

Capitalize first letter.


### ucwords()

Capitalize every word.


---

## Space Handling Functions

### trim()

Remove spaces from both sides.


### ltrim()

Remove left spaces.


### rtrim()

Remove right spaces.


---

## Search Functions

### strpos()

Find position of text.


### stripos()

Find position ignoring case.


### str_contains()

Check whether text exists.


### str_starts_with()

Check string beginning.


### str_ends_with()

Check string ending.


---

## Replace Functions

### str_replace()

Replace text.


### str_ireplace()

Replace text ignoring case.


---

## Substring Functions

### substr()

Extract part of string.


### substr_replace()

Replace part of string.


### substr_count()

Count occurrences.


---

## Comparison Functions

### strcmp()

Compare two strings.


### strcasecmp()

Compare strings ignoring case.


### strnatcmp()

Natural order comparison.


---

## Formatting Functions

### printf()

Formatted output.


### sprintf()

Create formatted string.


### number_format()

Format numbers.


### str_pad()

Add padding.


### str_repeat()

Repeat characters.


---

## Convert String and Array

### explode()

Convert string into array.


Example:

```php
$text = "PHP Laravel MySQL";

$array = explode(" ", $text);
```


---

### implode()

Convert array into string.


Example:

```php
$data = ["PHP","Laravel","MySQL"];

echo implode(", ",$data);
```


---

# Real-Life Examples

## Student Information

```php
$name = "Sohug";
$department = "CSE";
```


---

## Email Processing

```php
$email = "sohug@gmail.com";
```


---

## Product Management

```php
$product = "Dell Laptop";
```


---

## URL Slug Generator

Example:

Input:

```
Learn PHP & Laravel Framework in 2026!
```


Output:

```
learn-php-and-laravel-framework-in-2026
```


Used for:

- Blog URLs
- SEO Friendly Links
- Laravel Routes


---

# Best Practices

- Use meaningful variable names.
- Prefer double quotes when variable interpolation is required.
- Prefer single quotes for simple text.
- Keep string formatting readable.
- Use built-in string functions instead of manual processing.
- Always sanitize user input.
- Use trim() before processing user input.
- Validate user input before storing data.


---

# Common Mistakes


## Forgetting Quotes

Wrong:

```php
$name = Sohug;
```


Correct:

```php
$name = "Sohug";
```


---

## Mixing Quotes Incorrectly

Wrong:

```php
echo 'I'm Sohug';
```


Correct:

```php
echo "I'm Sohug";
```

or

```php
echo 'I\'m Sohug';
```


---

## Using + Instead of .

Wrong:

```php
echo "Hello" + "PHP";
```


Correct:

```php
echo "Hello " . "PHP";
```


---

# Important Comparisons


## strpos() vs str_contains()

| strpos() | str_contains() |
|-|-|
| Returns position | Returns true/false |
| Used when index is needed | Used only for checking existence |


---

## explode() vs implode()

| explode() | implode() |
|-|-|
| String → Array | Array → String |
| Splitting data | Joining data |


---

# Interview Questions

## 1. What is a String?

Answer:

A string is a sequence of characters used to represent text data.


---

## 2. Difference between single and double quotes?

Answer:

Single quotes do not support variable interpolation.

Double quotes support variable interpolation and escape characters.


---

## 3. What is concatenation?

Answer:

Concatenation means joining multiple strings using the dot (`.`) operator.


---

## 4. What is interpolation?

Answer:

Interpolation means inserting variables directly inside double quoted strings.


---

## 5. What is an escape character?

Answer:

Escape characters are special characters used to represent characters like newline, quotes, and backslash.


---

## 6. Difference between explode() and implode()?

Answer:

explode() converts string into array.

implode() converts array into string.


---

# Practice

Complete the following practice files:


```
practice
│
├── practice-01-string-basic.php
├── practice-02-search-replace-substring.php
├── practice-03-comparison-formatting.php
├── practice-04-explode-implode.php
└── practice-05-interview-style-problems.php
```


---

# Mini Projects

Completed Projects:


## 01 - Word Counter

Features:

- Count characters
- Count words
- Count sentences
- Text analysis


---

## 02 - String Utility

Features:

- Replace spaces
- Remove extra spaces
- Replace word
- Search word
- Count word
- Extract text
- Split text
- Join text
- Compare strings


---

# Resources

Official PHP Documentation:

https://www.php.net/manual/en/book.strings.php


W3Schools:

https://www.w3schools.com/php/php_strings.asp


PHP The Right Way:

https://phptherightway.com/