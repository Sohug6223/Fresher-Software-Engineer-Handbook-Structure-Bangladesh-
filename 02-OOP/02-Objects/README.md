# Objects

## Definition

An object is an instance of a class.

A class is a blueprint, while an object is the real entity created from that blueprint. Objects allow us to access the properties and methods defined inside a class.

Object হলো Class এর একটা instance — যার নিজস্ব property value থাকে এবং class এ define করা method ব্যবহার করতে পারে।
---

## Why Objects are Important

Objects are one of the core concepts of Object-Oriented Programming (OOP).

They allow us to:

- Create real instances from a class.
- Store different data in different objects.
- Access properties and methods.
- Model real-world entities in software.
- Write reusable and organized code.

Without objects, a class is only a blueprint and cannot be used in a program.

---

## Topics to Learn

- What is an Object?
- Class vs Object
- Creating an Object
- The `new` Keyword
- Object Variables
- Accessing Properties
- Calling Methods
- Creating Multiple Objects
- Objects with Different Data
- Real-World Examples

---

## Syntax

### Creating an Object

```php
$student = new Student();
```

### Accessing a Property

```php
$student->name = "Sohug";

echo $student->name;
```

### Calling a Method

```php
$student->study();
```

---

## Code Examples

In this chapter, you will learn:

- Creating an object
- Creating multiple objects
- Accessing object properties
- Calling object methods
- Working with multiple objects
- Real-world object examples

---

## Best Practices

- Use meaningful object variable names.
- Create an object only when needed.
- Keep class names in PascalCase.
- Keep object variable names in camelCase.
- One object should represent one real-world entity.
- Create multiple objects instead of reusing one object for different data.

---

## Common Mistakes

### 1. Forgetting the `new` keyword

❌ Wrong

```php
$student = Student();
```

✅ Correct

```php
$student = new Student();
```

---

### 2. Using `.` instead of `->`

❌ Wrong

```php
$student.name = "Sohug";
```

✅ Correct

```php
$student->name = "Sohug";
```

---

### 3. Accessing a property before creating an object

❌ Wrong

```php
$student->name = "Sohug";
```

✅ Correct

```php
$student = new Student();

$student->name = "Sohug";
```

---

### 4. Confusing a Class with an Object

❌ Wrong

```text
Student is an object.
```

✅ Correct

```text
Student is a class.

$student is an object.
```

---

### 5. Giving object variables unclear names

❌ Bad

```php
$a = new Student();
```

✅ Good

```php
$student = new Student();
```

---

## Interview Questions

Some interview questions covered in this chapter:

- What is an object?
- What is the difference between a class and an object?
- Which keyword is used to create an object?
- Can multiple objects be created from one class?
- How do you access a property?
- How do you call a method?

A complete interview question set is available in **interview-questions.md**.

---

## Practice Tasks

Practice files are available in the **practice/** folder.

You will practice:

- Creating objects
- Creating multiple objects
- Accessing properties
- Calling methods
- Working with real-world objects

---

## Mini Project

A mini project is available in the **mini-project/** folder.

You will apply everything learned in this chapter by creating and using objects in a simple real-world application.

---

## Resources

### Official Documentation

- PHP Manual — Classes and Objects

https://www.php.net/manual/en/language.oop5.php

### Recommended Practice

- PHP Official Documentation
- W3Schools PHP OOP
- PHP The Right Way