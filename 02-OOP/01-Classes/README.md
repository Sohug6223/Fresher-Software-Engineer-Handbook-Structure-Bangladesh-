# Classes

Object-Oriented Programming (OOP) starts with **Classes**. A class is the foundation of every object-oriented application. Before learning objects, inheritance, polymorphism, or any advanced OOP concepts, you must first understand what a class is and how it works.

---

# Definition

A **Class** is a blueprint or template used to create objects.

It defines the properties (data) and methods (behavior) that an object will have.

A class itself does **not** store real data. Instead, it describes the structure and behavior of future objects.

One class can be used to create multiple objects.

Class হলো একটা blueprint বা template যা বলে দেয় কোনো একটা জিনিস (object) এর কী কী property (data/attribute) এবং কী কী method (function/behavior) থাকবে।

---

# Why It Is Important

Classes provide a structured way to organize code.

Using classes allows you to:

* Organize code into logical components.
* Reduce code duplication.
* Improve code readability.
* Increase maintainability.
* Model real-world entities.
* Build scalable applications.
* Work efficiently in large projects.
* Understand modern PHP frameworks like Laravel.

Without classes, managing large applications becomes difficult and unorganized.

---

# Real-Life Analogy

Imagine a car manufacturing company.

Before building a real car, engineers first create a **blueprint**.

The blueprint defines:

* Brand
* Model
* Color
* Engine
* Maximum Speed

However, the blueprint itself is **not** a car.

Using the same blueprint, the factory can produce:

* Car 1
* Car 2
* Car 3
* Car 1000

In OOP,

* Blueprint = Class
* Real Car = Object

Similarly, one `Student` class can create many student objects.

---

# Topics to Learn

In this chapter, you will learn:

* What is a Class?
* Class Syntax
* Creating a Class
* Properties
* Methods
* Naming Convention
* Access Modifiers (Introduction)
* The `$this` Keyword (Introduction)

> **Note:** Objects, Constructors, Access Modifiers, and `$this` will be explained in detail in later chapters.

---

# Syntax

Basic class syntax:

```php
class ClassName
{
    // Properties

    // Methods
}
```

---

# Class Structure

A class generally contains:

* Properties (Variables)
* Methods (Functions)

Example:

```php
class Student
{
    public string $name;
    public int $age;

    public function study(): void
    {
        echo "Studying...";
    }
}
```

---

# Properties

Properties are variables declared inside a class.

They represent the data of an object.

Example:

```php
class Student
{
    public string $name;
    public string $department;
    public float $cgpa;
}
```

Each Student object will have its own values for these properties.

---

# Methods

Methods are functions declared inside a class.

They define the behavior of an object.

Example:

```php
class Student
{
    public function study(): void
    {
        echo "Student is studying.";
    }

    public function attendClass(): void
    {
        echo "Student is attending class.";
    }
}
```

---

# Naming Convention

PHP follows **PascalCase** for class names.

## Good

```text
Student
Employee
Car
BankAccount
CourseManager
```

## Bad

```text
student
employee_class
myclass
test
abc
```

A class name should describe **what the class represents**, not what it does.

---

# Code Examples

In this chapter, you will build classes such as:

* Student
* Employee
* Car
* Product
* Book

Each example introduces one concept at a time, making learning easier.

---

# Best Practices

* Use meaningful class names.
* Use PascalCase for class names.
* Keep one responsibility per class.
* Write small and focused methods.
* Group related properties and methods together.
* Follow PSR-12 coding standards.
* Use typed properties whenever possible.
* Keep classes simple and readable.

---

# Common Mistakes

* Using verbs as class names.
* Naming classes with lowercase letters.
* Putting unrelated logic into one class.
* Creating very large classes.
* Using meaningless names like `Test` or `Demo`.
* Mixing procedural code inside class definitions.
* Ignoring coding standards.

---

# Interview Questions

## Basic

1. What is a class?
2. Why do we use classes?
3. What is the difference between a class and an object?
4. Can one class create multiple objects?
5. What are properties?
6. What are methods?

## Intermediate

7. Why are classes called blueprints?
8. What naming convention is recommended for PHP classes?
9. What is the purpose of the `$this` keyword?
10. Why should classes have a single responsibility?

---

# Practice Tasks

## Beginner

1. Create a `Student` class.
2. Create an `Employee` class.
3. Create a `Car` class.
4. Create a `Book` class.
5. Create a `Laptop` class.

## Intermediate

1. Create a `BankAccount` class.
2. Create a `Course` class.
3. Create a `Hospital` class.
4. Create a `Library` class.
5. Create a `Restaurant` class.

## Challenge

Design classes for:

* University
* Department
* Teacher
* ShoppingCart
* Product

Think about the properties and methods each class should contain.

---

# Mini Project

## Student Information System

Create a `Student` class with the following properties:

* Name
* ID
* Department
* CGPA

Create the following methods:

* study()
* attendClass()
* showInformation()

This project will be completed after learning **Objects**.

---

# Laravel Connection

Everything in Laravel is built using classes.

Examples include:

* Controllers
* Models
* Middleware
* Events
* Jobs
* Notifications
* Policies
* Services

A strong understanding of classes makes Laravel much easier to learn.

---

# Resources

## Official Documentation

* PHP Manual — Classes and Objects

## Books

* Head First Object-Oriented Analysis & Design
* Clean Code
* PHP Objects, Patterns, and Practice

## Practice Platforms

* HackerRank
* Codewars
* LeetCode

---

# Summary

In this chapter, you learned:

* What a class is
* Why classes are important
* How to write a class
* Properties
* Methods
* Naming conventions
* Best practices
* Common mistakes
* Interview questions
* Practice tasks

The next chapter is **Objects**, where you will learn how to create real objects from a class and interact with them.
