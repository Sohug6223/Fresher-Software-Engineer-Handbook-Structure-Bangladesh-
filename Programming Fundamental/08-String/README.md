# Strings

## What is a String?

A **String** is a sequence of characters enclosed in single quotes (`' '`) or double quotes (`" "`).

String হলো character এর sequence যা text represent করে।

Strings are used to store and manipulate text data.

Examples:

- Student Name
- Email Address
- Phone Number
- Password
- Product Name
- City Name

---

## Why are Strings Important?

Strings are one of the most frequently used data types in PHP.

Almost every real-world application works with text.

Examples:

- User Registration
- Login System
- Search
- Email Sending
- Product Management
- Blog
- Chat Application
- Laravel Applications

Without strings, building dynamic web applications is impossible.

---

# Topics

This chapter covers:

- String Basics
- Single Quotes
- Double Quotes
- Escape Characters
- String Concatenation
- Variable Interpolation
- String Functions
- Search & Replace
- String Comparison
- Substring
- String Formatting
- Explode & Implode
- Practical Examples

---

# Basic Syntax

Single Quotes

```php
$name = 'Sohug';
```

Double Quotes

```php
$name = "Sohug";
```

---

# Examples

Example 1

```php
$name = "Sohug";

echo $name;
```

Output

```
Sohug
```

---

Example 2

```php
$message = 'Hello PHP';

echo $message;
```

Output

```
Hello PHP
```

---

Example 3

```php
$name = "Sohug";

echo "Welcome $name";
```

Output

```
Welcome Sohug
```

---

# Best Practices

- Use meaningful variable names.
- Prefer double quotes when variable interpolation is needed.
- Prefer single quotes for plain text.
- Keep string formatting readable.
- Use built-in string functions whenever possible.
- Trim user input before processing.

---

# Common Mistakes

## Forgetting Quotes

Wrong

```php
$name = Sohug;
```

Correct

```php
$name = "Sohug";
```

---

## Mixing Quotes Incorrectly

Wrong

```php
echo 'I'm Sohug';
```

Correct

```php
echo "I'm Sohug";
```

or

```php
echo 'I\'m Sohug';
```

---

## Using + Instead of .

Wrong

```php
echo "Hello" + "PHP";
```

Correct

```php
echo "Hello " . "PHP";
```

---

# Real-Life Examples

Student Name

```php
$name = "Sohug";
```

Email

```php
$email = "sohug@example.com";
```

Password

```php
$password = "abc123";
```

Product Name

```php
$product = "Dell Laptop";
```

---

# Interview Topics

You should be able to answer:

- What is a string?
- Difference between single and double quotes?
- What is concatenation?
- What is interpolation?
- What is escape character?
- Common string functions in PHP?
- Difference between explode() and implode()?
- Difference between strpos() and str_contains()?

---

# Practice

Complete the following practice files.

- Practice 01
- Practice 02
- Practice 03
- Practice 04
- Practice 05

---

# Mini Projects

- Word Counter
- Text Formatter

---

# Resources

Official PHP Documentation

https://www.php.net/manual/en/book.strings.php

W3Schools

https://www.w3schools.com/php/php_strings.asp

PHP The Right Way

https://phptherightway.com/
