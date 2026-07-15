# Variables

##  Definition

A variable is a named container used to store data in computer memory. The stored value can be changed during the execution of a program.

In simple words, a variable is like a labeled box where you can keep information and use it later.

-- Variable হলো memory তে থাকা একটা value কে refer করার জন্য একটা নাম (identifier)। এটা দিয়ে data store, read, এবং update করা যায়।
---

##  Why Variables Are Important

Imagine you want to create a Facebook, YouTube, or University Management System.

You need to store:

- User Name
- Email
- Password
- Age
- Phone Number
- Department
- Semester
- CGPA

Without variables, storing and using these values would be impossible.

Variables are one of the most fundamental concepts in programming.

let age = 25;          // পরে age বদলানো যাবে
const name = "Sohug";   // name আর বদলানো যাবে না
var city = "Dhaka";    // পুরনো পদ্ধতি — নতুন কোডে ব্যবহার করবে না
---

##  Real Life Example

Imagine you have several boxes.

Box 1
Label: Name
Value: Sohug

Box 2
Label: Age
Value: 23

Box 3
Label: Department
Value: CSE

The label is the variable name.

The content inside the box is the variable value.

---

##  How Computer Thinks

When you create a variable, PHP stores the value in memory.

Example:

Name ---> Sohug

Age ----> 23

CGPA ---> 3.85

You don't need to know the memory address.

PHP manages it automatically.

---

##  Variable Syntax

```php
$variableName = value;
```

Example:

```php
$name = "Sohug";
```

---

##  Syntax Breakdown

```
$name
```

- `$` means this is a variable.

```
=
```

- Assignment operator.
- Stores the value into the variable.

```
"Sohug"
```

- String value.

```
;
```

- Ends the statement.

Every PHP statement ends with a semicolon.

---

##  Variable Naming Rules

 Allowed

```php
$name

$firstName

$studentName

$_email

$user123
```

 Not Allowed

```php
$1name

$my name

$student-name

$name!

$class#
```

---

##  Naming Convention

Good

```php
$studentName

$phoneNumber

$totalPrice
```

Bad

```php
$a

$x

$temp1

$abc

$data123
```

Variable names should clearly describe their purpose.

---

##  Case Sensitive

PHP variables are case-sensitive.

These are different variables.

```php
$name

$Name

$NAME
```

---

##  Best Practices

- Use meaningful names.
- Use camelCase naming.
- Keep names short but descriptive.
- Avoid unnecessary abbreviations.
- One variable should represent one purpose.

---

##  Common Mistakes

Missing $

```php
name = "Sohug";
```

Wrong

Missing semicolon

```php
$name = "Sohug"
```

Wrong

Using spaces

```php
$student name
```

Wrong

Starting with number

```php
$123name
```

Wrong

---

## Interview Questions

1. What is a variable?

2. Why do we use variables?

3. Can a variable name start with a number?

4. Are PHP variables case-sensitive?

5. What is camelCase?

---

##  Practice Tasks

Create variables for:

- Name
- Age
- Department
- University
- CGPA

Create variables for an online shop.

- Product Name
- Price
- Quantity

Create variables for a bank account.

- Customer Name
- Account Number
- Balance

---

##  Mini Project

Student Information

Store:

- Name
- Department
- Semester
- University
- CGPA

Print all information.

---

##  Resources

Official PHP Documentation

https://www.php.net/manual/en/language.variables.php

---

##  Summary

In this chapter you learned:

- What is a variable
- Why variables are important
- Variable syntax
- Naming rules
- Best practices
- Common mistakes

The next chapter will cover Data Types.