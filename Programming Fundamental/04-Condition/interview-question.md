## Basic

### 1. What is a conditional statement?

A conditional statement is used to make decisions in a program based on whether a condition is true or false.

---

### 2. Why do we use conditional statements?

We use conditional statements to execute different blocks of code depending on different conditions.

---

### 3. What is the syntax of an if statement?

```php
if ($condition) {
    // code
}
```

---

### 4. What is the difference between if and if...else?

- `if` executes code only when the condition is true.
- `if...else` executes one block if the condition is true, otherwise executes another block.

---

### 5. What is the purpose of elseif?

`elseif` is used to check multiple conditions one after another.

---

### 6. What is a nested if statement?

A nested `if` is an `if` statement inside another `if` statement.

---

### 7. What is the difference between nested if and elseif?

- `elseif` checks multiple alternative conditions.
- Nested `if` checks another condition only after the first condition is true.

---

### 8. Which comparison operators are commonly used with conditions?

- `==`
- `===`
- `!=`
- `!==`
- `>`
- `<`
- `>=`
- `<=`

---

### 9. What is the difference between == and ===?

- `==` compares only values.
- `===` compares both value and data type.

Example:

```php
"10" == 10     // true
"10" === 10    // false
```

---

### 10. What is the difference between != and !==?

- `!=` checks if values are different.
- `!==` checks if values or data types are different.

---

## Logical Operators

### 11. What is the AND (&&) operator?

`&&` returns true only if all conditions are true.

---

### 12. What is the OR (||) operator?

`||` returns true if at least one condition is true.

---

### 13. What is the NOT (!) operator?

`!` reverses the boolean value.

Example:

```php
true  -> false
false -> true
```

---

### 14. What is short-circuit evaluation?

PHP stops evaluating a logical expression as soon as the final result is known.

---

### 15. What is the difference between && and ||?

- `&&` requires all conditions to be true.
- `||` requires at least one condition to be true.

---

## Switch & Match

### 16. What is a switch statement?

A `switch` statement selects one block of code from multiple possible cases.

---

### 17. When should you use switch instead of if...elseif?

Use `switch` when comparing one variable against many fixed values.

---

### 18. What is the match expression?

`match` is a modern alternative to `switch` that returns a value and uses strict comparison.

---

### 19. What is the difference between switch and match?

- `switch` uses loose comparison (`==`).
- `match` uses strict comparison (`===`).
- `match` returns a value.
- `match` does not require `break`.

---

### 20. Why is match considered safer than switch?

Because it uses strict comparison (`===`), reducing unexpected type conversion.

---

## Ternary & Null Coalescing

### 21. What is the ternary operator (?:)?

The ternary operator is a shorthand for `if...else`.

Example:

```php
$result = ($marks >= 33) ? "Pass" : "Fail";
```

---

### 22. When should you use the ternary operator?

Use it for simple conditions that return one of two values.

---

### 23. What is the null coalescing operator (??)?

The `??` operator returns the left value if it is not `null`; otherwise, it returns the right value.

Example:

```php
echo $email ?? "No Email";
```

---

### 24. What is the difference between ?: and ??`

- `?:` checks whether a condition is true or false.
- `??` checks whether a value is `null`.

---

## Best Practices

### 25. What are the common mistakes when writing conditions?

- Using `=` instead of `==`
- Forgetting braces `{ }`
- Writing deeply nested conditions
- Using `==` when `===` is required

---

### 26. Why should you avoid deeply nested if statements?

They make code difficult to read, understand, and maintain.

---

### 27. What are meaningful condition names?

Meaningful names clearly describe their purpose.

Examples:

```php
$isLoggedIn
$isStudent
$hasPermission
```

---

### 28. How can you write clean and readable conditional code?

- Use meaningful variable names.
- Keep conditions simple.
- Avoid unnecessary nesting.
- Use `match` or `switch` when appropriate.

---

### 29. Which conditional statement is best for multiple fixed values?

`switch` or `match`.

---

### 30. When should you choose if...elseif instead of switch or match?

Use `if...elseif` when checking ranges or complex logical expressions.

---

## Scenario-Based Questions

### 31. Write a program to check whether a number is even or odd.

Use the modulus operator (`%`) with an `if...else` statement.

---

### 32. Write a program to find the largest of two numbers.

Compare the two numbers using `if...else`.

---

### 33. Write a program to calculate a student's grade.

Use `if...elseif...else` based on the marks range.

---

### 34. Write a program to check voting eligibility.

Check whether the age is 18 or above using `if...else`.

---

### 35. Write a login validation program.

Compare the entered username and password using logical operators (`&&`).

---

### 36. Write a university admission eligibility program.

Check GPA and admission test marks using the `&&` operator.

---

### 37. Write an ATM withdrawal validation program.

Verify that the balance is sufficient and the withdrawal amount is valid using `&&`.

---

### 38. Write an online shopping discount program.

Use `if...elseif...else` or the ternary operator to apply discounts based on purchase amount or membership.

---

### 39. Write a movie ticket price calculator.

Use `if...elseif...else` to determine the ticket price based on age.

---

### 40. Write an electricity bill calculator.

Use `if...elseif...else` to calculate the bill based on unit ranges.