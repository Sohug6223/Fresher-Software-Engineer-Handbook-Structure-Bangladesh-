# Operators

---

# Definition

An operator is a symbol that performs an operation on one or more operands (values or variables) and produces a result.

In simple words, an operator tells PHP what action to perform on data.


Operator হলো এমন একটি Symbol যা এক বা একাধিক Value অথবা Variable-এর উপর Operation করে একটি Result প্রদান করে।

---

# Why Operators Are Important

Imagine you are building an E-commerce website.

You need to:

- Add product prices
- Calculate discounts
- Compare passwords
- Check login status
- Increase product quantity
- Join first and last names

None of these tasks are possible without operators.

Operators are one of the most fundamental concepts in programming because almost every program performs calculations, comparisons, or logical decisions.

---

# Real-Life Example

Imagine you go to a supermarket.

Product A = 100 Tk

Product B = 50 Tk

Total Bill

```
100 + 50 = 150
```

Here,

```
+
```

is an operator.

Another example:

```
Age >= 18
```

If true,

```
Eligible
```

Otherwise,

```
Not Eligible
```

Again,

```
>=
```

is an operator.

Operators are everywhere in programming.

---

# How Computer Thinks

Suppose,

```php
$total = 500 + 200;
```

PHP performs the following steps:

Step 1

Read

```
500
```

Step 2

Read

```
+
```

Step 3

Read

```
200
```

Step 4

Perform addition

Step 5

Store

```
700
```

inside

```php
$total
```

---

# Operator Syntax

```php
$value1 operator $value2;
```

Example

```php
$total = 10 + 5;
```

---

# Syntax Breakdown

```php
10
```

First Operand

```php
+
```

Operator

```php
5
```

Second Operand

Result

```
15
```

---

# Types of Operators

PHP provides many types of operators.

We will learn:

- Arithmetic Operators
- Assignment Operators
- Comparison Operators
- Logical Operators
- Increment & Decrement Operators
- String Operators
- Ternary Operator
- Null Coalescing Operator
- Operator Precedence

Each operator has its own purpose.

---

# Best Practices

- Use parentheses to improve readability.
- Always compare values carefully.
- Prefer `===` over `==` when possible.
- Keep expressions simple.
- Avoid unnecessary complex calculations.

---

# Common Mistakes

- Confusing `=` with `==`
- Using `==` instead of `===`
- Ignoring operator precedence
- Writing unreadable expressions
- Forgetting parentheses

---

# Interview Questions

- What is an operator?
- Why are operators important?
- What is an operand?
- How many types of operators are available in PHP?
- What is the difference between `=` and `==`?

---

# Practice Tasks

- Add two numbers.
- Calculate student total marks.
- Compare two ages.
- Check whether a student passed.
- Join first and last names.

---

# Mini Project

Simple Calculator

The calculator should:

- Take two numbers from the user.
- Perform addition.
- Perform subtraction.
- Perform multiplication.
- Perform division.
- Display all results.

---

# Resources

Official PHP Documentation

https://www.php.net/manual/en/language.operators.php

---

# Summary

In this chapter you learned:

- What is an Operator
- Why Operators are Important
- Operator Syntax
- Types of Operators
- Best Practices
- Common Mistakes

In the next lessons, we will learn each operator in detail with examples, practice tasks, mini projects, and interview questions.