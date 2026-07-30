# PHP Variables - Interview Questions

This document contains the most common PHP Variable interview questions for beginners and freshers.

---

# Beginner Level

## 1. What is a variable?

**Answer**

A variable is a named container used to store data in memory. The stored value can be changed during program execution.

Example:

```php
$name = "Sohug";
```

---

## 2. Why do we use variables?

**Answer**

Variables allow us to store, update, and reuse data throughout a program.

Examples:

- User Name
- Email
- Password
- Price
- Age
- Department

---

## 3. What symbol is used before every PHP variable?

**Answer**

The dollar sign (`$`).

Example:

```php
$age = 23;
```

---

## 4. Can a variable name start with a number?

**Answer**

No.

 Invalid

```php
$1name = "Sohug";
```

 Valid

```php
$name1 = "Sohug";
```

---

## 5. Are PHP variables case-sensitive?

**Answer**

Yes.

```php
$name = "Sohug";
$Name = "Rahim";
$NAME = "Karim";
```

These are three different variables.

---

## 6. Which naming convention is recommended?

**Answer**

camelCase

Example:

```php
$studentName
$totalPrice
$phoneNumber
```

---

## 7. What is the difference between a variable and a constant?

| Variable         | Constant      |
|------------------|---------------|
| Can change       | Cannot change |
| Starts with `$`  | No `$`        |
| Created using `=`| Created using `define()` or `const`              |

---

## 8. Difference between define() and const?

**define()**

```php
define("APP_NAME", "Fresher Programmer");
```

**const**

```php
const VERSION = "1.0.0";
```

Both create constants.

---

## 9. Can a constant be changed?

No.

Once defined, it cannot be modified.

---

## 10. What is Variable Scope?

Variable Scope determines where a variable can be accessed.

Types:

- Global Scope
- Local Scope

---

# Intermediate Level

## 11. What is a Global Variable?

Declared outside a function.

Example:

```php
$name = "Sohug";
```

---

## 12. What is a Local Variable?

Declared inside a function.

Example:

```php
function student()
{
    $department = "CSE";
}
```

---

## 13. How do you access a global variable inside a function?

Using the `global` keyword.

```php
global $name;
```

---

## 14. What is $GLOBALS?

`$GLOBALS` is a predefined PHP superglobal array that contains all global variables.

Example:

```php
echo $GLOBALS['name'];
```

---

## 15. What is String Concatenation?

Joining strings using the dot (`.`) operator.

```php
echo "Name: " . $name;
```

---

## 16. What is Variable Interpolation?

Using variables directly inside double quotes.

```php
echo "Name: $name";
```

---

## 17. Difference between Single Quote and Double Quote?

Single Quotes:

```php
echo 'Hello $name';
```

Output:

```
Hello $name
```

Double Quotes:

```php
echo "Hello $name";
```

Output:

```
Hello Sohug
```

---

## 18. Which is faster?

Generally,

Single Quotes are slightly faster because PHP doesn't parse variables inside them.

However,

The performance difference is negligible in real-world applications.

---

# Output Prediction

## Question 1

```php
$name = "Sohug";

echo $name;
```

Output?
Sohug
---

## Question 2

```php
$name = "Sohug";

echo "Hello $name";
```

Output?
Hello Sohug
---

## Question 3

```php
$name = "Sohug";

echo 'Hello $name';
```

Output?
Hello $name
---

## Question 4

```php
$age = 21;

echo "Next Age: " . ($age + 1);
```

Output?
Next Age: 22
---

## Question 5

```php
$age = 21;

echo "Next Age: $age + 1";
```

Output?
Next Age: 21 + 1
---

# Common Mistakes

❌ Missing $

```php
name = "Sohug";
```

---

❌ Missing Semicolon

```php
$name = "Sohug"
```

---

❌ Invalid Variable Name

```php
$1name
```

---

❌ Space in Variable Name

```php
$student name
```

---

❌ Using a Global Variable Without `global`

```php
$name = "Sohug";

function test()
{
    echo $name;
}
```

---

# Quick Revision

- Variable stores data.
- Variable starts with `$`.
- Variable names are case-sensitive.
- Use meaningful names.
- Use camelCase.
- Constants cannot be changed.
- Global variables are declared outside functions.
- Local variables are declared inside functions.
- Use `global` or `$GLOBALS` to access global variables inside functions.
- Use `.` for concatenation.
- Use double quotes for interpolation.

---

# End of Chapter