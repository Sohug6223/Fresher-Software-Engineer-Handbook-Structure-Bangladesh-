# Arrays in PHP

Arrays are one of the most important data structures in PHP.

An array allows you to store multiple values in a single variable instead of creating many separate variables.

Arrays make programs more organized, flexible, and easier to maintain.

Array হলো একটা ordered, index-ভিত্তিক collection যা একটা মাত্র variable এ একাধিক value রাখতে ব্যবহার হয়।

---

# Why Do We Use Arrays?

Without arrays, you would need a separate variable for each value.

Example:

```php
$name1 = "Sohug";
$name2 = "Rahim";
$name3 = "Karim";
$name4 = "Sakib";
$name5 = "Hasan";
```

As the amount of data grows, managing individual variables becomes difficult.

Using an array, all values can be stored in a single variable.

```php
$students = [
    "Sohug",
    "Rahim",
    "Karim",
    "Sakib",
    "Hasan"
];
```

This makes the code cleaner, shorter, and easier to work with.

---

# Real-Life Example

Imagine a classroom with 50 students.

Without an array, you would have to create 50 separate variables.

```php
$student1 = "Rahim";
$student2 = "Karim";
$student3 = "Sakib";
...
$student50 = "Hasan";
```

Managing these variables would be difficult.

Instead, you can store all student names in one array.

```php
$students = [
    "Rahim",
    "Karim",
    "Sakib",
    "Hasan"
];
```

Now all student names are organized in a single variable.

---

# Array Syntax

There are two ways to create an array in PHP.

## Method 1 (Recommended)

```php
$colors = [
    "Red",
    "Green",
    "Blue"
];
```

---

## Method 2

```php
$colors = array(
    "Red",
    "Green",
    "Blue"
);
```

Both methods work correctly.

However, the short array syntax (`[]`) is recommended because it is cleaner and more commonly used in modern PHP.

---

# Example

```php
<?php

$fruits = [
    "Apple",
    "Banana",
    "Orange"
];

print_r($fruits);
```

Output

```
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Orange
)
```

---

# Advantages of Arrays

- Store multiple values in a single variable.
- Reduce code duplication.
- Make programs easier to read.
- Simplify data management.
- Work efficiently with loops.
- Improve code organization.
- Make programs easier to maintain.

---

# Summary

- An array stores multiple values in a single variable.
- PHP provides two ways to create arrays.
- The short array syntax (`[]`) is recommended.
- Arrays help write cleaner, shorter, and more maintainable code.
- Arrays become even more powerful when combined with loops.

> **Note:**
> In the next section, we will learn about **Indexed Arrays**, the most basic and commonly used type of array in PHP.