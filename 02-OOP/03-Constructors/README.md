# Constructors

## Definition

A constructor is a special method in a class that is automatically executed when an object is created.

Constructor হলো class এর ভিতরে বিশেষ method (__construct) যা automatically call হয় object তৈরির সময়, প্রয়োজনীয় data দিয়ে object সেট করার জন্য।

In PHP, a constructor is defined using the `__construct()` method.

---

## Why It Is Important

Constructors help initialize an object with the required data immediately after it is created.

Instead of assigning values one by one after creating an object, a constructor allows you to provide those values during object creation.

Benefits of constructors:

- Automatically initializes object data.
- Reduces repetitive code.
- Makes objects ready to use immediately.
- Improves code readability.
- Helps create more reliable and maintainable applications.

---

## Topics to Learn

- What is a Constructor?
- The `__construct()` Method
- Automatic Constructor Execution
- Constructor with One Parameter
- Constructor with Multiple Parameters
- Default Parameter Values
- Creating Multiple Objects Using Constructors
- Constructors in Real-World Applications
- Constructor vs Normal Method
- Best Practices

---

## Syntax

### Basic Constructor

```php
class Student
{
    public function __construct()
    {
        echo "Constructor executed.";
    }
}
```

---

### Constructor with Parameters

```php
class Student
{
    public function __construct($name)
    {
        // Initialize object
    }
}
```

---

## Best Practices

- Keep constructors simple and focused.
- Initialize only the required data.
- Avoid writing complex business logic inside constructors.
- Use meaningful parameter names.
- Keep constructors easy to read and maintain.

---

## Common Mistakes

- Forgetting to use the special method name `__construct()`.
- Expecting the constructor to be called manually after creating an object.
- Putting too much logic inside the constructor.
- Creating constructors with too many parameters.
- Confusing constructors with normal methods.

---

## Resources

### Official Documentation

- PHP Manual — Constructors and Destructors

### Recommended Reading

- PHP: The Right Way
- PHP OOP Tutorials
- Laravel Documentation (Object-Oriented PHP)

### Practice

Create different classes with constructors and observe how they execute automatically when objects are created.