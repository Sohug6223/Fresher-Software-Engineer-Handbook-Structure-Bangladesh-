# Constructor Interview Questions

## Basic Questions

### 1. What is a constructor in PHP?

**Answer:**

A constructor is a special method that is automatically called when an object is created. It is mainly used to perform initialization tasks.

---

### 2. What is the name of the constructor method in PHP?

**Answer:**

The constructor method in PHP is named `__construct()`.

---

### 3. When is a constructor executed?

**Answer:**

A constructor is executed automatically when an object is created using the `new` keyword.

---

### 4. Can a class exist without a constructor?

**Answer:**

Yes. A class can exist without a constructor. Constructors are optional in PHP.

---

### 5. What is the main purpose of a constructor?

**Answer:**

The main purpose of a constructor is to initialize an object when it is created.

---

## Output Questions

### 6. What will be the output?

```php
class Student
{
    public function __construct()
    {
        echo "Student object created.";
    }
}

new Student();
```

**Answer:**

```text
Student object created.
```

---

### 7. What will be the output?

```php
class Book
{
    public function __construct($title)
    {
        echo $title;
    }
}

new Book("Clean Code");
```

**Answer:**

```text
Clean Code
```

---

### 8. What will be the output?

```php
class Car
{
    public function __construct($brand = "Toyota")
    {
        echo $brand;
    }
}

new Car();
```

**Answer:**

```text
Toyota
```

---

### 9. Identify the parameter and the argument.

```php
class Student
{
    public function __construct($name)
    {
        echo $name;
    }
}

new Student("Sohug");
```

**Answer:**

- Parameter → `$name`
- Argument → `"Sohug"`

---

### 10. How many times will the constructor execute?

```php
class Employee
{
    public function __construct()
    {
        echo "Created" . PHP_EOL;
    }
}

new Employee();
new Employee();
new Employee();
```

**Answer:**

The constructor will execute **3 times**, because three objects are created.

---

## Code Writing Questions

### 11. Write a class named `Student` with a constructor that displays `"Student object created."`.

**Answer:**

```php
class Student
{
    public function __construct()
    {
        echo "Student object created.";
    }
}

new Student();
```

---

### 12. Write a class named `Book` with a constructor that accepts one parameter (`$title`) and displays it.

**Answer:**

```php
class Book
{
    public function __construct($title)
    {
        echo $title;
    }
}

new Book("Clean Code");
```

---

### 13. Write a class named `Car` with a constructor that accepts two parameters (`$brand` and `$model`) and displays them.

**Answer:**

```php
class Car
{
    public function __construct($brand, $model)
    {
        echo "Brand: " . $brand . PHP_EOL;
        echo "Model: " . $model . PHP_EOL;
    }
}

new Car("Toyota", "Corolla");
```

---

### 14. Write a class named `Employee` with a constructor that has a default parameter value of `"Intern"`.

**Answer:**

```php
class Employee
{
    public function __construct($designation = "Intern")
    {
        echo $designation;
    }
}

new Employee();
```

---

### 15. Create three objects from a `Movie` class using a constructor with one parameter.

**Answer:**

```php
class Movie
{
    public function __construct($title)
    {
        echo $title . PHP_EOL;
    }
}

new Movie("Inception");
new Movie("Interstellar");
new Movie("The Dark Knight");
```

---

## Debugging Questions

### 16. Find the mistake.

```php
class Student
{
    public function construct()
    {
        echo "Student";
    }
}

new Student();
```

**Answer:**

The constructor name is incorrect.

Correct:

```php
public function __construct()
```

---

### 17. Find the mistake.

```php
class Book
{
    public function __construct($title)
    {
        echo $title;
    }
}

new Book();
```

**Answer:**

The constructor expects one argument, but no argument was passed.

Correct:

```php
new Book("Clean Code");
```

---

### 18. Find the mistake.

```php
class Car
{
    public function __construct($brand, $model)
    {
        echo $brand;
    }
}

new Car("Toyota");
```

**Answer:**

The constructor expects **two arguments**, but only **one** was provided.

Correct:

```php
new Car("Toyota", "Corolla");
```

---

### 19. Find the mistake.

```php
class Employee
{
    public function __construct($designation = "Intern")
    {
        echo $designation;
    }
}

new Employee("Manager", "HR");
```

**Answer:**

Only one parameter is defined, but two arguments were passed.

Correct:

```php
new Employee("Manager");
```

---

### 20. Find the mistake.

```php
class Movie
{
    public function __construct()
    {
        echo "Movie";
    }
}

Movie();
```

**Answer:**

An object was not created.

Correct:

```php
new Movie();
```

---

## Scenario-Based Questions

### 21. Why would you use a constructor instead of calling a normal method after creating an object?

**Answer:**

A constructor runs automatically when an object is created, making it useful for initialization without requiring an extra method call.

---

### 22. Can a constructor accept parameters?

**Answer:**

Yes. A constructor can accept one or more parameters, just like a normal method.

---

### 23. Can a constructor have default parameter values?

**Answer:**

Yes. Default parameter values can be used so that arguments become optional.

---

### 24. How many constructors can a PHP class have?

**Answer:**

A PHP class can have only **one** constructor (`__construct()`).

---

### 25. What happens if a class does not define a constructor?

**Answer:**

Nothing unusual happens. Objects can still be created normally, but no constructor code will execute automatically.

---