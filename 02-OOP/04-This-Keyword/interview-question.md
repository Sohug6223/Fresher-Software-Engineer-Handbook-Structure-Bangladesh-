# This Keyword Interview Questions

## Basic Questions

### 1. What is `$this` in PHP?

**Answer:**

`$this` is a special keyword in PHP that refers to the current object. It is used to access the object's properties and methods.

---

### 2. Why do we use `$this`?

**Answer:**

We use `$this` to:

- Access object properties.
- Call methods of the current object.
- Store constructor parameter values into object properties.

---

### 3. Where can `$this` be used?

**Answer:**

`$this` can be used inside non-static methods and constructors of a class.

---

### 4. Can `$this` be used outside a class?

**Answer:**

No. `$this` can only be used inside an object of a class.

---

### 5. Can `$this` be used inside a static method?

**Answer:**

No. `$this` is not available inside static methods because static methods belong to the class, not to an object.

---

## Code-Based Questions

### 6. What will be the output?

```php
class Student
{
    public $name = "Sohug";

    public function showName()
    {
        echo $this->name;
    }
}

$student = new Student();
$student->showName();
```

**Answer:**

```text
Sohug
```

---

### 7. What does the following statement do?

```php
$this->name = $name;
```

**Answer:**

It assigns the value of the local variable (`$name`) to the object's property (`$this->name`).

---

### 8. Find the mistake.

```php
class Student
{
    public $name;

    public function __construct($name)
    {
        $name = $name;
    }
}
```

**Answer:**

The object's property is never assigned.

Correct code:

```php
$this->name = $name;
```

---

### 9. Find the mistake.

```php
$this->name = "Sohug";
```

**Answer:**

`$this` cannot be used outside a class or object method.

---

### 10. What is the difference between `$name` and `$this->name`?

**Answer:**

- `$name` is a local variable or method parameter.
- `$this->name` is a property of the current object.

---