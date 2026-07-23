# PHP Loops - Interview Answers

## 1. What is a loop?

A loop is a programming structure that executes a block of code repeatedly until a specified condition becomes false.

---

## 2. Why do we use loops in programming?

Loops reduce code duplication, automate repetitive tasks, and make programs shorter, cleaner, and easier to maintain.

---

## 3. Which loops are available in PHP?

PHP provides four loop types:

- `for`
- `while`
- `do...while`
- `foreach`

> **Note:** `foreach` is mainly used with arrays and objects. We will learn it after completing the Arrays chapter.

---

## 4. What is the difference between `for` and `while` loops?

Use a `for` loop when the number of iterations is known. Use a `while` loop when the number of iterations depends on a condition and is not known in advance.

---

## 5. When should you use a `do...while` loop?

Use a `do...while` loop when the code must execute at least once before checking the condition.

---

## 6. What is a nested loop?

A nested loop is a loop inside another loop. It is commonly used for pattern printing, tables, and working with multi-dimensional data.

---

## 7. What is an infinite loop?

An infinite loop is a loop that never ends because its condition always remains true or the loop variable is never updated.

---

## 8. What is the purpose of the `break` statement?

The `break` statement immediately terminates the current loop.

---

## 9. What is the purpose of the `continue` statement?

The `continue` statement skips the current iteration and moves to the next iteration of the loop.

---

## 10. What is the difference between `break` and `continue`?

- `break` exits the loop completely.
- `continue` skips only the current iteration and continues with the next one.

---

## 11. What are the three parts of a `for` loop?

A `for` loop consists of:

- Initialization
- Condition
- Increment/Decrement

Example:

```php
for ($i = 1; $i <= 10; $i++)
```

---

## 12. Can you omit any part of a `for` loop?

Yes. Any part of a `for` loop can be omitted, but you must ensure the loop can still terminate correctly.

---

## 13. Which loop is best when the number of iterations is known?

The `for` loop is the best choice.

---

## 14. Which loop is best when the number of iterations is unknown?

The `while` loop is the best choice.

---

## 15. What happens if the condition of a `while` loop is initially false?

The loop body will not execute even once.

---

## 16. What happens if the condition of a `do...while` loop is initially false?

The loop body executes once because the condition is checked after the first iteration.

---

## 17. What is the output?
```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
```

Output:

```
1 2 3 4 5
```

---

## 18. What is the output?
```php
$i = 1;

while ($i <= 3) {
    echo $i;
    $i++;
}
```

Output:

```
123
```

---

## 19. What is the output?
```php
for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        break;
    }

    echo $i . " ";
}
```

Output:

```
1 2
```

The loop stops when `break` is executed.

---

## 20. What is the output?
```php
for ($i = 1; $i <= 5; $i++) {

    if ($i == 3) {
        continue;
    }

    echo $i . " ";
}
```

Output:

```
1 2 4 5
```

The number `3` is skipped because of `continue`.

---

## 21. How do you print even numbers from 1 to 100?

Use a loop and either increment by 2 or check if the number is divisible by 2.

---

## 22. How do you print odd numbers from 1 to 100?

Use a loop and either increment by 2 or check if the number is not divisible by 2.

---

## 23. How do you reverse numbers from 10 to 1 using a loop?

Start the loop at 10 and decrement the loop variable until it reaches 1.

---

## 24. How do you print a multiplication table using a loop?

Use a loop from 1 to 10 and multiply each value by the given number.

---

## 25. How do you create a menu-driven program using loops?

Use a `do...while` loop to repeatedly display the menu and a `switch` statement to process the user's choice.

---

## 26. How do you stop a loop based on user input?

Read the user's input inside the loop and stop when the required value is entered, either by updating the loop condition or using `break`.

---

## 27. How do you generate star patterns using nested loops?

Use the outer loop to control rows and the inner loop to control columns.

---

## 28. Why are nested loops used?

Nested loops are used for pattern printing, multiplication tables, matrices, and processing multi-dimensional data.

---

## 29. What is the time complexity of a single loop?

A single loop generally has a time complexity of **O(n)**.

---

## 30. What is the time complexity of a nested loop?

A nested loop with two loops of size `n` generally has a time complexity of **O(n²)**.