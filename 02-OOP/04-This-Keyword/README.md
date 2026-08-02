# This Keyword

## What is `$this`?

`$this` is a special keyword in PHP that refers to the **current object**.

It allows an object to access its own properties and methods.

---

## Why Do We Use `$this`?

We use `$this` to:

- Access object properties.
- Call methods of the same object.
- Assign constructor parameters to object properties.
- Differentiate between local variables and object properties.

---

## Syntax

```php
$this->propertyName;
```

```php
$this->methodName();
```

---

## Example

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

**Output**

```text
Sohug
```

---

## Where Can `$this` Be Used?

- Inside object methods.
- Inside constructors.
- Inside other non-static methods.

---

## Where Can `$this` NOT Be Used?

- Outside a class.
- Inside a static method.

---

## Best Practices

- Always use `$this->` when accessing object properties.
- Use meaningful property names.
- Keep property names and parameter names consistent.

---

## Common Mistakes

### ❌ Forgetting `$this`

```php
$name = "Sohug";
```

### ✅ Correct

```php
$this->name = "Sohug";
```

---

### ❌ Using `$this` Outside a Class

```php
$this->name = "Sohug";
```

This will produce an error because `$this` only exists inside an object.

---

## Key Points

- `$this` refers to the current object.
- `$this->property` accesses a property.
- `$this->method()` calls a method.
- `$this` can only be used inside object methods.