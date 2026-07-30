# Operators

---

# Definition

An operator is a symbol that performs an operation on one or more operands (values or variables) and produces a result.

In simple words, an operator tells PHP what action to perform on data.

Operator হলো এমন একটি Symbol যা এক বা একাধিক Value অথবা Variable-এর উপর Operation করে একটি Result প্রদান করে।

---

# What is an Operand?

An operand is the value or variable on which an operator performs an operation.

Example:

```php
$total = 10 + 5;
```

Here,

- `10` → First Operand
- `+` → Operator
- `5` → Second Operand

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

If true

```
Eligible
```

Otherwise

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

PHP performs the following steps.

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

In this chapter, we will learn:

- Arithmetic Operators
- Assignment Operators
- Comparison Operators
- Identity Operators
- Spaceship Operator
- Logical Operators
- Increment & Decrement Operators
- String Operators
- Ternary Operator
- Null Coalescing Operator
- Operator Precedence

Other operators available in PHP (covered later if needed):

- Bitwise Operators
- Error Control Operator (`@`)
- Execution Operator (`` ` ``)

Each operator has its own purpose.

---

# Operator Categories

| Category | Purpose |
|----------|---------|
| Arithmetic | Mathematical calculations |
| Assignment | Assign values |
| Comparison | Compare values |
| Identity | Compare value and data type |
| Spaceship | Three-way comparison |
| Logical | Combine conditions |
| Increment / Decrement | Increase or decrease values |
| String | Join strings |
| Ternary | Short if...else |
| Null Coalescing | Handle null values |

---

# Best Practices

- Use parentheses to improve readability.
- Always compare values carefully.
- Prefer `===` over `==` whenever possible.
- Keep expressions simple.
- Avoid unnecessary complex calculations.
- Write readable expressions.

---

# Common Mistakes

- Confusing `=` with `==`
- Using `==` instead of `===`
- Ignoring operator precedence
- Forgetting parentheses
- Writing unreadable expressions
- Using the wrong operator for strings (`+` instead of `.`)

---

# Interview Questions

- What is an operator?
- What is an operand?
- Why are operators important?
- How many types of operators are available in PHP?
- What is the difference between `=` and `==`?
- What is the difference between `==` and `===`?
- What does the Spaceship Operator (`<=>`) do?
- Why should you prefer `===` over `==`?

---

# Practice Tasks

- Add two numbers.
- Calculate student total marks.
- Compare two ages.
- Check whether a student passed.
- Join first and last names.
- Compare two variables using `===`.
- Compare two numbers using `<=>`.

---

# Mini Project

## Simple Calculator

The calculator should:

- Take two numbers from the user.
- Perform addition.
- Perform subtraction.
- Perform multiplication.
- Perform division.
- Compare two numbers.
- Display all results.

---

# Resources

Official PHP Documentation

https://www.php.net/manual/en/language.operators.php

---

# Summary

In this chapter, you learned:

- What is an Operator
- What is an Operand
- Why Operators are Important
- Operator Syntax
- Arithmetic Operators
- Assignment Operators
- Comparison Operators
- Identity Operators
- Spaceship Operator
- Logical Operators
- Increment & Decrement Operators
- String Operators
- Ternary Operator
- Null Coalescing Operator
- Operator Precedence
- Best Practices
- Common Mistakes

In the next lessons, we will learn each operator in detail with practical examples, exercises, mini projects, and interview questions.