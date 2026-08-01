# Objects Interview Questions

## Basic Questions

### 1. What is an object?

**Answer:**

An object is an instance of a class. It is created from a class and can access the properties and methods defined inside that class.

---

### 2. What is the difference between a class and an object?

**Answer:**

A class is a blueprint or template, while an object is a real instance created from that blueprint.

---

### 3. Which keyword is used to create an object in PHP?

**Answer:**

The `new` keyword.

Example:

```php
$student = new Student();
```

---

### 4. What does the `new` keyword do?

**Answer:**

The `new` keyword creates a new object (instance) from a class.

---

### 5. Can a class create multiple objects?

**Answer:**

Yes. One class can create any number of objects.

---

### 6. Are all objects created from the same class identical?

**Answer:**

No.

They have the same structure but can store different data.

---

### 7. How do you access a property of an object?

**Answer:**

Using the object operator (`->`).

Example:

```php
$student->name = "Sohug";
```

---

### 8. How do you call a method of an object?

**Answer:**

Using the object operator (`->`).

Example:

```php
$student->study();
```

---

### 9. What is the object operator in PHP?

**Answer:**

The object operator is `->`.

It is used to access properties and methods of an object.

---

### 10. Can you create an object without a class?

**Answer:**

No.

An object must always be created from a class.

---

### 11. What happens if you create multiple objects from one class?

**Answer:**

Each object is created separately and can store its own data.

---

### 12. Can two objects have different property values?

**Answer:**

Yes.

Each object maintains its own property values independently.

---

### 13. What is an instance?

**Answer:**

An instance is another name for an object created from a class.

---

### 14. Can one object access another object's properties directly?

**Answer:**

Not directly.

An object only accesses its own properties unless another object's reference is used.

---

### 15. Why do we create objects?

**Answer:**

Objects allow us to use the properties and methods defined in a class and represent real-world entities in software.

---

# Intermediate Questions

### 16. What is stored inside an object?

**Answer:**

An object stores the values of its properties and provides access to its methods.

---

### 17. Is every object independent?

**Answer:**

Yes.

Every object is independent, even if they are created from the same class.

---

### 18. What happens when you write `new Student()`?

**Answer:**

PHP creates a new object from the `Student` class and returns that object.

---

### 19. Which operator is used to access object members?

**Answer:**

The `->` operator.

---

### 20. Can an object exist without being assigned to a variable?

**Answer:**

Yes, but in most practical programs, objects are assigned to variables so they can be used later.

Example:

```php
$student = new Student();
```

---

# Scenario-Based Questions

### 21. Create an object from a `Car` class.

```
<?php

class Car
{
    public $brand;
    public $model;
}

$car = new Car();

```
---

### 22. Create three objects from an `Employee` class.

```
<?php

class Employee
{
    public $name;
    public $department;
}

$employee1 = new Employee();
$employee2 = new Employee();
$employee3 = new Employee();
```

---

### 23. Assign values to the properties of a `Book` object.

```
class Book
{
    public $title;
    public $author;
    public $price;
}

$book = new Book();

$book->title = "Clean Code";
$book->author = "Robert C. Martin";
$book->price = 950.00;

echo "Title: " . $book->title . PHP_EOL;
echo "Author: " . $book->author . PHP_EOL;
echo "Price: " . $book->price . " BDT" . PHP_EOL;

```

---

### 24. Call the `play()` method of a `Movie` object.

```
class Movie
{
    public function play()
    {
        echo "The movie is now playing." . PHP_EOL;
    }
}

$movie = new Movie();

$movie->play();

```

---

### 25. Explain how multiple objects from the same class can contain different data.

A class is a blueprint, while an object is an individual instance created from that blueprint.

Every object has its own copy of the properties, so changing the data of one object does not affect the others.

```
class Student
{
    public $name;
    public $roll;
}

$student1 = new Student();
$student1->name = "Rahim";
$student1->roll = 101;

$student2 = new Student();
$student2->name = "Karim";
$student2->roll = 102;

echo $student1->name . " - " . $student1->roll . PHP_EOL;
echo $student2->name . " - " . $student2->roll . PHP_EOL;
```

---

# Quick Revision

- What is an object?
- What is an instance?
- Which keyword creates an object?
- Which operator accesses object properties?
- Which operator calls object methods?
- Can one class create multiple objects?
- Can different objects store different data?
- Is an object the same as a class?

---

# Common Interview Mistakes

- Confusing a class with an object.
- Forgetting to use the `new` keyword.
- Using `.` instead of `->`.
- Thinking all objects share the same property values.
- Assuming an object can exist without a class.



