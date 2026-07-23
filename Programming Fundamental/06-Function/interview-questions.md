# Functions

## What is a Function?

A function is a reusable block of code that performs a specific task.

In simple words,

A function allows you to write code once and use it multiple times whenever needed.

Instead of writing the same code repeatedly, you can place it inside a function and call it whenever required.

Function হলো কোডের একটি নির্দিষ্ট ব্লক, যা একটি নির্দিষ্ট কাজ শেষ করার জন্য তৈরি করা হয় এবং প্রয়োজন অনুযায়ী বারবার ব্যবহার করা যায় (Reusable Code Block)।

---

## Why Do We Use Functions?

Functions help us write clean, organized, and reusable code.

Without functions, large programs become difficult to read, maintain, and update.

Functions provide several benefits:

- Reduce code duplication
- Improve code reusability
- Make programs easier to read
- Simplify debugging
- Improve code organization
- Make maintenance easier

---

## Real-Life Example

Imagine a calculator.

It has separate buttons for:

- Addition
- Subtraction
- Multiplication
- Division

Each button performs one specific task.

Similarly,

A function performs one specific job.

Whenever you need that job, you simply call the function instead of writing the same code again.

---

## Function Syntax

```php
function functionName() {

    // Code

}
```

---

## Function Declaration

A function is created using the `function` keyword.

General syntax:

```php
function greet() {

    echo "Hello, World!";

}
```

Here,

- `function` → Keyword used to declare a function.
- `greet` → Function name.
- `()` → Parentheses (Parameters go here.)
- `{}` → Function body.

---

## Calling a Function

Creating a function does not execute it.

A function runs only when it is called.

Example

```php
function greet() {

    echo "Hello, World!";

}

greet();
```

Output

```
Hello, World!
```

You can call the same function multiple times.

```php
greet();
greet();
greet();
```

Output

```
Hello, World!
Hello, World!
Hello, World!
```

---

## Function Naming Rules

Function names should follow these rules:

- Must start with a letter or underscore (`_`)
- Cannot start with a number
- Can contain letters, numbers, and underscores
- Cannot contain spaces
- Avoid special characters

Valid

```php
calculateTotal()

getName()

student_info()

_printMessage()
```

Invalid

```php
123hello()

student name()

my-function()
```

---

## Function Naming Convention

Use meaningful names.

Good Examples

```php
calculateTotal()

findAverage()

printStudent()

sendEmail()
```

Bad Examples

```php
abc()

test()

hello()

data()
```

Choose names that clearly describe the purpose of the function.

---

## Parameters

Parameters are variables declared inside the parentheses of a function.

They allow a function to receive data.

Example

```php
function greet($name) {

    echo "Hello, $name";

}
```

Here,

`$name` is a parameter.

---

## Arguments

Arguments are the actual values passed to a function when it is called.

Example

```php
function greet($name) {

    echo "Hello, $name";

}

greet("Sohug");
```

Here,

```
$name
```

is the parameter.

```
"Sohug"
```

is the argument.

---

## Parameter vs Argument

| Parameter | Argument |
|-----------|----------|
| Declared in a function | Passed while calling a function |
| Acts like a variable | Actual value |
| Exists inside the function | Exists outside the function |

Example

```php
function add($a, $b) {

    echo $a + $b;

}

add(10, 20);
```

Parameters

```
$a
$b
```

Arguments

```
10
20
```

---

## Summary

In this section, you learned:

- What a function is
- Why functions are important
- Function syntax
- Function declaration
- Function calling
- Function naming rules
- Parameters
- Arguments
- Difference between parameters and arguments

---

> **Next:** After understanding the basics of functions, we will learn **Default Parameters**, **Return Values**, and **Type Declarations**.

---

# Default Parameters

A default parameter is a parameter that has a predefined value.

If no argument is passed while calling the function, the default value is used automatically.

---

## Syntax

```php
function functionName($parameter = defaultValue) {

    // Code

}
```

---

## Example

```php
function greet($name = "Guest") {

    echo "Hello, " . $name . PHP_EOL;

}

greet();

greet("Sohug");
```

Output

```
Hello, Guest
Hello, Sohug
```

---

## Multiple Default Parameters

```php
function student($name = "Unknown", $department = "CSE") {

    echo "Name: " . $name . PHP_EOL;
    echo "Department: " . $department . PHP_EOL;

}

student();

student("Sohug");

student("Sohug", "Computer Science");
```

---

## Rules for Default Parameters

- Default parameters should be placed after required parameters.
- A default value is used only when no argument is provided.
- Default values can be strings, numbers, booleans, arrays, or `null`.

Correct

```php
function show($name, $age = 20) {

}
```

Incorrect

```php
function show($name = "Sohug", $age) {

}
```

---

# Return Values

A function can return a value using the `return` keyword.

Instead of printing the result directly, a function can send the result back to the caller.

---

## Why Use Return?

Returning values makes functions more flexible.

The returned value can be:

- Stored in a variable
- Printed later
- Used in calculations
- Passed to another function

---

## Syntax

```php
function functionName() {

    return value;

}
```

---

## Example

```php
function add($a, $b) {

    return $a + $b;

}

$result = add(10, 20);

echo $result;
```

Output

```
30
```

---

## Returning Strings

```php
function university() {

    return "City University";

}

echo university();
```

---

## Returning Boolean Values

```php
function isAdult($age) {

    return $age >= 18;

}

var_dump(isAdult(20));
```

Output

```
bool(true)
```

---

## Returning Multiple Calculations

```php
function rectangleArea($length, $width) {

    return $length * $width;

}

echo rectangleArea(10, 5);
```

Output

```
50
```

---

## Returning Early

A function stops immediately after executing the `return` statement.

Example

```php
function demo() {

    echo "First";

    return;

    echo "Second";

}

demo();
```

Output

```
First
```

The second `echo` will never execute.

---

# Type Declarations

PHP allows you to specify the expected data type of function parameters.

This improves code readability and helps prevent unexpected type-related errors.

---

## Syntax

```php
function functionName(type $parameter) {

}
```

---

## Integer Type

```php
function square(int $number) {

    return $number * $number;

}

echo square(5);
```

---

## Float Type

```php
function circleArea(float $radius) {

    return 3.1416 * $radius * $radius;

}
```

---

## String Type

```php
function greet(string $name) {

    echo "Hello, " . $name;

}
```

---

## Boolean Type

```php
function login(bool $status) {

    if ($status) {

        echo "Login Successful";

    } else {

        echo "Login Failed";

    }

}
```

---

## Array Type

```php
function showNumbers(array $numbers) {

    print_r($numbers);

}
```

---

# Return Type Declarations

You can also specify the data type that a function should return.

---

## Syntax

```php
function functionName(): type {

}
```

---

## Integer Return Type

```php
function add(int $a, int $b): int {

    return $a + $b;

}
```

---

## Float Return Type

```php
function average(int $a, int $b): float {

    return ($a + $b) / 2;

}
```

---

## String Return Type

```php
function getName(): string {

    return "Sohug";

}
```

---

## Boolean Return Type

```php
function isPassed(int $marks): bool {

    return $marks >= 40;

}
```

---

# Strict Types

By default, PHP automatically converts compatible data types.

Example

```php
function add(int $a, int $b) {

    return $a + $b;

}

echo add("10", "20");
```

Output

```
30
```

PHP automatically converts the strings to integers.

---

## Enabling Strict Types

Strict types disable automatic type conversion.

If the wrong type is passed, PHP throws a `TypeError`.

Add the following line at the very beginning of the file:

```php
<?php

declare(strict_types=1);
```

---

## Example

```php
<?php

declare(strict_types=1);

function add(int $a, int $b): int {

    return $a + $b;

}

echo add("10", "20");
```

Output

```
TypeError
```

---

# Benefits of Type Declarations

- Improve code readability
- Detect errors early
- Reduce unexpected bugs
- Improve code quality
- Make functions more reliable

---

## Summary

In this section, you learned:

- Default Parameters
- Return Values
- Return Statement
- Type Declarations
- Return Type Declarations
- Strict Types


---

# Variable Scope

Variable scope determines where a variable can be accessed in a program.

In PHP, variables have different scopes depending on where they are declared.

---

## Types of Variable Scope

PHP has four main variable scopes:

- Local Scope
- Global Scope
- Static Scope
- Parameter Scope

---

# Local Scope

A variable declared inside a function is called a local variable.

It can only be accessed inside that function.

Example

```php
function student() {

    $name = "Sohug";

    echo $name;

}

student();
```

Output

```
Sohug
```

Trying to access `$name` outside the function will produce an error.

```php
student();

echo $name;
```

Output

```
Undefined variable
```

---

# Global Scope

A variable declared outside a function belongs to the global scope.

It cannot be accessed directly inside a function.

Example

```php
$name = "Sohug";

function showName() {

    echo $name;

}

showName();
```

Output

```
Undefined variable
```

---

## Accessing Global Variables

Use the `global` keyword.

```php
$name = "Sohug";

function showName() {

    global $name;

    echo $name;

}

showName();
```

Output

```
Sohug
```

---

## Using `$GLOBALS`

PHP also provides the `$GLOBALS` superglobal array.

```php
$name = "Sohug";

function showName() {

    echo $GLOBALS['name'];

}

showName();
```

---

# Static Scope

Normally, local variables are destroyed after the function finishes.

A static variable keeps its value between function calls.

Example

```php
function counter() {

    static $count = 0;

    $count++;

    echo $count . PHP_EOL;

}

counter();
counter();
counter();
```

Output

```
1
2
3
```

Without `static`, the output would always be:

```
1
1
1
```

---

# Parameter Scope

Parameters behave like local variables.

They exist only inside the function.

```php
function greet($name) {

    echo $name;

}

greet("Sohug");
```

The parameter `$name` cannot be accessed outside the function.

---

# Variable Scope Summary

| Scope | Accessible Where? |
|--------|-------------------|
| Local | Inside the function only |
| Global | Outside the function |
| Static | Inside the function and retains its value |
| Parameter | Inside the function only |

---

# Anonymous Functions

An anonymous function is a function without a name.

It is also called a **Closure**.

Anonymous functions are usually stored in variables or passed as arguments to other functions.

---

## Syntax

```php
$variable = function () {

    // Code

};
```

---

## Example

```php
$greet = function () {

    echo "Hello, World!";

};

$greet();
```

Output

```
Hello, World!
```

---

## Anonymous Function with Parameters

```php
$add = function ($a, $b) {

    return $a + $b;

};

echo $add(10, 20);
```

Output

```
30
```

---

## Why Use Anonymous Functions?

Anonymous functions are commonly used for:

- Callbacks
- Array functions
- Event handling
- Closures

---

# Arrow Functions

Arrow functions were introduced in PHP 7.4.

They provide a shorter syntax for writing simple anonymous functions.

---

## Syntax

```php
fn(parameter) => expression;
```

---

## Example

```php
$add = fn($a, $b) => $a + $b;

echo $add(10, 20);
```

Output

```
30
```

---

## Traditional Function vs Arrow Function

Traditional

```php
$multiply = function ($a, $b) {

    return $a * $b;

};
```

Arrow Function

```php
$multiply = fn($a, $b) => $a * $b;
```

Arrow functions are shorter and easier to read for simple expressions.

---

## Limitations of Arrow Functions

Arrow functions:

- Can contain only one expression.
- Automatically return the result.
- Are not suitable for complex logic with multiple statements.

---

# Recursive Functions

A recursive function is a function that calls itself.

Recursion is useful for solving problems that can be broken down into smaller versions of the same problem.

---

## Syntax

```php
function example() {

    example();

}
```

---

## Important Note

Every recursive function must have a **base condition**.

Without a base condition, the function will continue calling itself forever, causing a fatal error.

---

## Example: Countdown

```php
function countdown($number) {

    if ($number == 0) {

        return;

    }

    echo $number . PHP_EOL;

    countdown($number - 1);

}

countdown(5);
```

Output

```
5
4
3
2
1
```

---

## Example: Factorial

```php
function factorial($number) {

    if ($number <= 1) {

        return 1;

    }

    return $number * factorial($number - 1);

}

echo factorial(5);
```

Output

```
120
```

---

# When Should You Use Recursion?

Recursion is useful for:

- Factorial
- Fibonacci
- Tree Traversal
- Directory Traversal
- Divide and Conquer Algorithms

However, for simple repetitive tasks, loops are usually faster and easier to understand.

---

## Summary

In this section, you learned:

- Variable Scope
- Local Variables
- Global Variables
- Static Variables
- Parameter Scope
- Anonymous Functions
- Arrow Functions
- Recursive Functions

---

# Built-in Functions

PHP provides thousands of built-in functions that perform common tasks.

Instead of writing everything from scratch, you can use these predefined functions.

---

## String Functions

```php
echo strlen("Hello");
```

Output

```
5
```

---

```php
echo strtoupper("php");
```

Output

```
PHP
```

---

```php
echo strtolower("PHP");
```

Output

```
php
```

---

# Number Functions

```php
echo abs(-25);
```

Output

```
25
```

---

```php
echo max(10, 50, 20);
```

Output

```
50
```

---

```php
echo min(10, 50, 20);
```

Output

```
10
```

---

```php
echo sqrt(49);
```

Output

```
7
```

---

# Array Functions

> **Note:** We have not learned arrays yet.

The following functions will be explained in detail in the Arrays chapter.

```php
count()

sort()

array_push()

array_pop()

in_array()
```

---

# Date & Time Functions

```php
echo date("Y-m-d");
```

Example Output

```
2026-07-23
```

---

```php
echo time();
```

Output

```
Current Unix Timestamp
```

---

# Type Checking Functions

```php
is_int()

is_float()

is_string()

is_bool()

is_array()
```

Example

```php
$value = 100;

var_dump(is_int($value));
```

Output

```
bool(true)
```

---

# Function Best Practices

Follow these practices when writing functions.

### 1. Use Meaningful Function Names

Good

```php
calculateTotal()

findAverage()

sendEmail()

printInvoice()
```

Bad

```php
abc()

test()

hello()

demo()
```

---

### 2. Keep Functions Small

Each function should perform only one task.

Good

```php
calculateTax()

calculateDiscount()

calculateTotal()
```

Avoid creating one large function that performs many unrelated tasks.

---

### 3. Avoid Duplicate Code

If the same code is repeated multiple times, move it into a function.

This improves readability and makes maintenance easier.

---

### 4. Use Parameters Instead of Global Variables

Good

```php
function greet($name) {

    echo "Hello, " . $name;

}
```

Avoid

```php
global $name;
```

Passing values through parameters makes functions easier to understand, test, and reuse.

---

### 5. Return Values Instead of Printing Everything

Good

```php
function add($a, $b) {

    return $a + $b;

}

$total = add(10, 20);

echo $total;
```

Avoid writing functions that only print values when the result may be needed elsewhere.

---

### 6. Add Comments When Necessary

Write comments only where the logic is not obvious.

Avoid commenting every single line of code.

---

### 7. Use Type Declarations

Example

```php
function add(int $a, int $b): int {

    return $a + $b;

}
```

Type declarations improve code quality and reduce unexpected bugs.

---

# Common Mistakes

### Forgetting to Call a Function

```php
function greet() {

    echo "Hello";

}
```

Nothing will happen until:

```php
greet();
```

---

### Forgetting the Return Statement

Incorrect

```php
function add($a, $b) {

    $a + $b;

}
```

Correct

```php
function add($a, $b) {

    return $a + $b;

}
```

---

### Using Wrong Number of Arguments

Incorrect

```php
function greet($name) {

}

greet();
```

Correct

```php
greet("Sohug");
```

---

### Writing Very Large Functions

Large functions are difficult to read and maintain.

Break large tasks into smaller functions.

---

### Using Global Variables Unnecessarily

Avoid depending on global variables.

Prefer parameters and return values whenever possible.

---

# Summary

After completing this chapter, you should be able to:

- Create functions
- Call functions
- Pass parameters
- Use arguments
- Work with default parameters
- Return values
- Use type declarations
- Enable strict types
- Understand variable scope
- Write anonymous functions
- Write arrow functions
- Understand recursion
- Use common built-in functions

---

# Practice Recommendation

Complete all practice problems before moving to the next chapter.

Try solving each problem on your own before checking the solution.

Writing code yourself is the fastest way to improve your programming skills.

---

# What's Next?

The next chapter is **Arrays**.

In the Arrays chapter, you will learn:

- Indexed Arrays
- Associative Arrays
- Multidimensional Arrays
- Array Functions
- Looping Through Arrays
- `foreach` Loop
- Sorting Arrays
- Searching Arrays

> **Note:** The `foreach` loop is mainly used with arrays. After completing the Arrays chapter, we will revisit `foreach` and explain it in detail with practical examples.

---

# Congratulations 

You have completed the **Functions** chapter.

Keep practicing regularly and write your own functions to solve real-world problems.

The more functions you write, the more comfortable you will become with PHP programming.