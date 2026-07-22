# Loops

## Learning Objectives

After completing this chapter, you will be able to:

- Understand what a loop is.
- Explain why loops are important.
- Write `for`, `while`, and `do...while` loops.
- Understand the purpose of the `foreach` loop.
- Control loop execution using `break` and `continue`.
- Write nested loops.
- Solve repetitive programming problems.
- Avoid common mistakes while using loops.

---

## Definition

A loop is a programming structure that executes the same block of code repeatedly until a specified condition becomes false.

In simple words, a loop allows you to perform the same task multiple times without writing the same code again.

Loop হলো এমন একটি Programming Structure যা একটি নির্দিষ্ট Condition সত্য থাকা পর্যন্ত একই Code বারবার Execute করে।

---

## Why Loops Are Important

Imagine you are building a University Management System.

You need to:

- Print 1,000 Student IDs
- Generate 500 Student Reports
- Calculate CGPA for every student
- Display hundreds of courses
- Send notifications to all students

Without loops, you would have to write the same code repeatedly.

Loops make programs:

- Shorter
- Cleaner
- Faster to write
- Easier to maintain

---

## Real-Life Example

Imagine a teacher checking exam papers.

The teacher follows the same steps for every paper:

1. Open the paper.
2. Check the answers.
3. Give marks.
4. Move to the next paper.

These steps are repeated until all papers have been checked.

A loop works in exactly the same way.

---

## How the Computer Thinks

Example:

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i . PHP_EOL;
}
```

Execution Flow:

```
Initialization

↓

Condition

↓

Execute Code

↓

Increment

↓

Condition Again

↓

Execute Code

↓

...

↓

Condition becomes false

↓

Loop Stops
```

---

## PHP Loop Types

PHP provides four main loops.

### 1. for Loop

Used when the number of iterations is known.

```php
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}
```

---

### 2. while Loop

Used when the number of iterations is unknown.

```php
$i = 1;

while ($i <= 5) {
    echo $i;
    $i++;
}
```

---

### 3. do...while Loop

Executes the code at least once.

```php
$i = 1;

do {

    echo $i;
    $i++;

} while ($i <= 5);
```

---

### 4. foreach Loop

Used to iterate through arrays and objects.

```php
$subjects = ["PHP", "Laravel", "MySQL"];

foreach ($subjects as $subject) {

    echo $subject;

}
```

> **Note**
>
> The `foreach` loop is introduced here for completeness.
> A detailed explanation, practical examples, and best practices will be covered in the **Arrays** chapter.

---

## Difference Between Loops

| Loop | Best Use Case |
|------|---------------|
| for | Known number of iterations |
| while | Unknown number of iterations |
| do...while | Execute at least once |
| foreach | Iterate through arrays and objects |

---

## Best Practices

- Use meaningful variable names.
- Avoid infinite loops.
- Keep loop bodies simple.
- Use `break` only when necessary.
- Use `continue` carefully.
- Choose the appropriate loop for the problem.

---

## Common Mistakes

- Infinite loops
- Forgetting increment/decrement
- Wrong loop condition
- Modifying the loop variable incorrectly
- Using the wrong loop type

---

## Summary

In this chapter, you learned:

- What a loop is
- Why loops are important
- How loops work
- `for` loop
- `while` loop
- `do...while` loop
- `foreach` loop
- `break`
- `continue`
- Nested loops
- Pattern printing
- Best practices
- Common mistakes

The next step is to learn each loop with practical examples, exercises, mini projects, and interview questions.