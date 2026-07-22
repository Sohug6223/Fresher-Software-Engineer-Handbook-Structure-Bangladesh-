# PHP Operators Interview Answers

## 1. What is an Operator?

An Operator is a symbol that performs an operation on one or more operands.

Example:

```php
10 + 20
```

---

## 2. Why do we use Operators?

Operators are used to perform calculations, comparisons, assignments, logical operations, string operations, and many other tasks.

---

## 3. Types of Operators

- Arithmetic
- Assignment
- Comparison
- Logical
- Increment/Decrement
- String
- Ternary
- Null Coalescing

---

## 4. Difference between Arithmetic and Assignment Operators

Arithmetic operators perform mathematical calculations.

Assignment operators assign or update values in variables.

---

## 5. Difference between = and ==

`=` → Assignment Operator

```php
$x = 10;
```

`==` → Compare only values.

```php
10 == "10"
```

Result:

```text
true
```

---

## 6. Difference between == and ===

`==`

Compares only values.

`===`

Compares both value and data type.

Example:

```php
10 == "10"
```

Result

```text
true
```

Example

```php
10 === "10"
```

Result

```text
false
```

---

## 7. Difference between != and !==

`!=`

Checks only value.

`!==`

Checks both value and data type.

---

## 8. Difference between ++\$x and \$x++

Pre Increment

Increase first, then use.

Post Increment

Use first, then increase.

---

## 9. Difference between --\$x and \$x--

Pre Decrement

Decrease first.

Post Decrement

Use first, then decrease.

---

## 10. Difference between && and and

Both mean Logical AND.

`&&` has higher precedence.

`and` has lower precedence.

---

## 11. Difference between || and or

Both mean Logical OR.

`||` has higher precedence.

`or` has lower precedence.

---

## 12. What is the Ternary Operator?

A shorthand version of if...else.

Syntax

```php
(condition) ? true : false;
```

---

## 13. What is the Null Coalescing Operator?

Returns the right-side value if the left-side value is null.

Syntax

```php
$name ?? "Guest";
```

---

## 14. What is Operator Precedence?

Operator precedence determines which operation PHP performs first.

Example

```php
10 + 5 * 2
```

Multiplication happens first.

---

## 15. Why use parentheses?

Parentheses make expressions easier to read and ensure the intended order of execution.

Example

```php
($price + $vat) * $quantity
```

---

# Output Answers

### Question 1

```php
$a = 20;
$b = 5;

echo $a + $b;
```

Output

```text
25
```

---

### Question 2

```php
$x = 10;

echo $x++;
echo PHP_EOL;
echo $x;
```

Output

```text
10
11
```

---

### Question 3

```php
$x = 10;

echo ++$x;
```

Output

```text
11
```

---

### Question 4

```php
echo 10 + 5 * 2;
```

Output

```text
20
```

---

### Question 5

```php
echo (10 + 5) * 2;
```

Output

```text
30
```

---

### Question 6

```php
echo "Hello " . "PHP";
```
Output

```text
Hello PHP
```

---

### Question 7

```php
$name = null;

echo $name ?? "Guest";
```

Output

```text
Guest
```

---

### Question 8

```php
echo (20 >= 18) ? "Adult" : "Minor";
```

Output

```text
Adult
```

---

### Question 9

```php
$a = true && false;

var_dump($a);
```

Output

```text
bool(false)
```

---

### Question 10

```php
$a = true and false;

var_dump($a);
```

Output

```text
bool(true)
```

---

# Scenario Answers

1. Which operator is used to compare both value and data type?- `===`
2. Which operator is used to provide a default value if a variable is null?
- `??`
3. Which operator is used to check multiple conditions together?
- `&&` or `||`
4. Which operator is used to join two strings?
- `.`
5.Which operator is used to increase a variable by one?
- `++`
6. Which operator is used to calculate the remainder?
- `%`
7. Which operator is commonly used for quick if...else statements?
- `?:`
8.  Which operator has higher precedence: `&&` or `and`?
- `&&`
9. Which operator is commonly used in Laravel for default values?
- `??`
10. Which operator is used for exponentiation (power)?
- `**`