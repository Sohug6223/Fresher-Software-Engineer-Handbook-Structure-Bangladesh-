# Functions - Interview Questions

## Basic Questions

### 1. What is a function?

A function is a reusable block of code that performs a specific task.

---

### 2. Why do we use functions?

We use functions to:
- Reduce code duplication
- Improve code readability
- Make programs easier to maintain
- Reuse the same logic multiple times

---

### 3. What is the syntax of a function?

```php
function functionName()
{
    // Code
}
```

---

### 4. How do you call a function?

```php
sayHello();
```

---

### 5. What is a user-defined function?

A function created by the programmer is called a user-defined function.

Example:

```php
function greet()
{
    echo "Hello";
}
```

---

### 6. What is a built-in function?

A built-in function is already provided by PHP.

Examples:

- strlen()
- max()
- min()
- abs()
- date()

---

### 7. What is the difference between built-in and user-defined functions?

| Built-in Function | User-defined Function |
|-------------------|-----------------------|
| Already exists in PHP | Created by the programmer |
| Ready to use | Must be written first |

---

### 8. What is a parameter?

A parameter is a variable declared in the function definition.

Example:

```php
function greet($name)
```

Here, `$name` is a parameter.

---

### 9. What is an argument?

An argument is the actual value passed to a function.

Example:

```php
greet("Sohug");
```

Here, `"Sohug"` is an argument.

---

### 10. What is the difference between a parameter and an argument?

| Parameter | Argument |
|-----------|----------|
| Variable inside a function | Actual value passed to the function |

---

### 11. What is a default parameter?

A default parameter has a predefined value.

Example:

```php
function greet($name = "Guest")
{
    echo $name;
}
```

---

### 12. What is a return value?

A return value is the value sent back from a function using the `return` keyword.

Example:

```php
function add($a, $b)
{
    return $a + $b;
}
```

---

### 13. What is the difference between echo and return?

| echo | return |
|------|--------|
| Displays output | Sends a value back |
| Cannot be stored | Can be stored in a variable |
| Does not end the function | Ends the function immediately |

---

### 14. What happens after the return statement?

The function stops executing immediately.

Any code after `return` will not execute.

---

### 15. Can a function return another function?

Yes.

A function can return an anonymous function (closure).

---

### 16. What is variable scope?

Variable scope defines where a variable can be accessed.

---

### 17. What is a local variable?

A variable declared inside a function.

It can only be used inside that function.

---

### 18. What is a global variable?

A variable declared outside a function.

It can be accessed inside a function using the `global` keyword.

---

### 19. What is the global keyword?

The `global` keyword allows a function to access a global variable.

Example:

```php
$country = "Bangladesh";

function showCountry()
{
    global $country;

    echo $country;
}
```

---

### 20. What is the $GLOBALS array?

`$GLOBALS` is a predefined PHP array that stores all global variables.

Example:

```php
$name = "Sohug";

function showName()
{
    echo $GLOBALS["name"];
}
```

---

### 21. What is a static variable?

A static variable keeps its value between function calls.

Example:

```php
function counter()
{
    static $count = 0;

    $count++;

    echo $count;
}
```

---

### 22. What is strict_types?

`strict_types` disables automatic type conversion in PHP.

Example:

```php
declare(strict_types=1);
```

---

### 23. What are type declarations?

Type declarations specify the expected data type of function parameters.

Example:

```php
function square(int $number)
{
    return $number * $number;
}
```

---

### 24. What is an anonymous function?

An anonymous function is a function without a name.

Example:

```php
$greet = function () {
    echo "Hello";
};
```

---

### 25. What is an arrow function?

An arrow function is a shorter way to write a simple anonymous function.

Example:

```php
$square = fn($number) => $number * $number;
```

---

### 26. What is recursion?

Recursion is a technique where a function calls itself.

---

### 27. What is a base case in recursion?

The base case is the condition that stops the recursive function.

Without a base case, recursion will continue indefinitely.

---

### 28. What is the difference between recursion and loops?

| Recursion | Loop |
|-----------|------|
| Function calls itself | Repeats using loops |
| Needs a base case | Needs a loop condition |
| Uses function calls | Uses `for`, `while`, or `do...while` |

---

### 29. Name five built-in functions you have used.

Examples:

- strlen()
- max()
- min()
- abs()
- date()

---

### 30. Can a function call another function?

Yes.

A function can call another function whenever needed.

Example:

```php
function add($a, $b)
{
    return $a + $b;
}

function showResult($a, $b)
{
    echo add($a, $b);
}
```