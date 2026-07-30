# Arrays

## Learning Objectives

After completing this chapter, you will be able to:

- Understand what an array is.
- Explain why arrays are important.
- Create arrays using different syntaxes.
- Understand how arrays store data.
- Access array elements.
- Modify array values.
- Work with different types of arrays.
- Use arrays with loops.
- Follow best practices.
- Avoid common mistakes.

---

# Definition

An array is a data structure that allows you to store multiple values in a single variable.

Instead of creating many separate variables, you can group related values together inside an array.

Arrays make programs more organized, flexible, and easier to maintain.

**বাংলায়:**

Array হলো এমন একটি Data Structure যা একটি মাত্র Variable-এর মধ্যে একাধিক Value সংরক্ষণ করতে সাহায্য করে।

---

# Why Arrays Are Important

Imagine you are building a University Management System.

You need to store:

- Student Names
- Student IDs
- Marks
- Subjects
- Departments
- Teacher Names

Without arrays, you would have to create hundreds of separate variables.

Arrays make your programs:

- Cleaner
- Shorter
- Easier to read
- Easier to maintain
- More scalable

---

# Real-Life Example

Imagine a classroom with 50 students.

Without arrays:

```php
$student1 = "Rahim";
$student2 = "Karim";
$student3 = "Sakib";
...
$student50 = "Hasan";
```

Managing these variables would be difficult.

Using an array:

```php
$students = [
    "Rahim",
    "Karim",
    "Sakib",
    "Hasan"
];
```

Now all student names are stored inside one variable.

---

# How the Computer Thinks

Suppose,

```php
$fruits = [
    "Apple",
    "Banana",
    "Orange"
];
```

PHP stores the data like this:

```
$fruits

↓

Index 0 → Apple

Index 1 → Banana

Index 2 → Orange
```

Each value has its own index.

The first element always starts from index `0`.

---

# Array Syntax

PHP provides two ways to create arrays.

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

However, the short array syntax (`[]`) is recommended because it is cleaner and widely used in modern PHP.

---

# Types of Arrays

PHP provides three main types of arrays.

- Indexed Arrays
- Associative Arrays
- Multidimensional Arrays

Each type will be covered in detail in the following chapters.

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

- Store multiple values in one variable.
- Reduce code duplication.
- Improve readability.
- Simplify data management.
- Work efficiently with loops.
- Improve code organization.
- Make programs easier to maintain.

---

# Topics Covered

In this chapter, you will learn:

- Indexed Arrays
- Associative Arrays
- Multidimensional Arrays
- Accessing Elements
- Updating Elements
- Adding Elements
- Removing Elements
- Array Functions
- Looping Through Arrays
- foreach Loop
- Sorting Arrays
- Searching Arrays
- Best Practices
- Common Mistakes

---

# Best Practices

- Use meaningful array names.
- Store related data together.
- Prefer the short array syntax (`[]`).
- Use `foreach` when iterating over arrays.
- Keep arrays organized and readable.

---

# Common Mistakes

- Accessing an invalid index.
- Forgetting that array indexing starts from `0`.
- Mixing unrelated data in the same array.
- Using unnecessary variables instead of arrays.
- Choosing the wrong array type.

---

# Interview Questions

- What is an array?
- Why do we use arrays?
- What are the types of arrays in PHP?
- What is the difference between indexed and associative arrays?
- Which syntax is recommended for creating arrays?
- What is the first index of an array?
- Which loop is commonly used with arrays?

---

# Practice Tasks

- Create an indexed array of five student names.
- Print the first and last element.
- Create an array of marks.
- Create an array of favorite programming languages.
- Create an associative array for student information.

---

# Mini Project

Student Information System

Features:

- Store student names
- Store student IDs
- Store marks
- Display all information
- Find total students

---

# Resources

Official PHP Documentation

https://www.php.net/manual/en/language.types.array.php

---

# Summary

In this chapter, you learned:

- What an array is
- Why arrays are important
- Array syntax
- Types of arrays
- How arrays work
- Best practices
- Common mistakes
- Interview questions
- Practice
- Mini project

After completing this chapter, you will be ready to learn **Indexed Arrays**, **Associative Arrays**, **Multidimensional Arrays**, and powerful array functions in detail.