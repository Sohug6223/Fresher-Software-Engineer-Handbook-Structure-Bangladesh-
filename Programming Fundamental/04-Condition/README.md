# Conditions

## Definition

A condition is a decision-making statement that allows a program to execute different blocks of code based on whether a specific condition is true or false.

In simple words, conditions help a program decide what to do in different situations.

**বাংলায়:**

Condition হলো এমন একটি Programming Concept, যার মাধ্যমে Program কোনো নির্দিষ্ট শর্ত (Condition) সত্য (true) বা মিথ্যা (false) কিনা তা যাচাই করে এবং সেই অনুযায়ী সিদ্ধান্ত (Decision) নেয়।

---

## Why Conditions Are Important

Almost every real-world application uses conditions.

Examples:

- Login System
- Registration Form
- ATM Machine
- Online Shopping
- Student Result System
- Hospital Management System
- Banking Software
- University Management System

Imagine a Login System.

If the email and password are correct,
the user can log in.

Otherwise,
an error message is shown.

Without conditions, software cannot make decisions.

---

## Real-Life Example

Imagine a traffic signal.

Green Light

→ Go

Yellow Light

→ Wait

Red Light

→ Stop

The traffic signal checks a condition and decides what action should be taken.

Programming works in exactly the same way.

---

## How Computer Thinks

Suppose,

Age = 20

Condition:

Age >= 18

Computer checks:

Is 20 greater than or equal to 18?

↓

Yes

↓

Execute

"You are eligible."

If the answer is No,

Execute

"You are not eligible."

---

## Types of Conditions

PHP provides several ways to make decisions.

- if
- if...else
- if...elseif...else
- Nested if
- switch
- match (PHP 8+)
- Ternary Operator
- Null Coalescing Operator

---

## Topics Covered

### if

Execute a block of code only when the condition is true.

---

### if...else

Execute one block if the condition is true,
otherwise execute another block.

---

### if...elseif...else

Used when multiple conditions need to be checked.

---

### Nested if

An if statement inside another if statement.

Useful for complex decision making.

---

### Logical Conditions

Use:

- &&
- ||
- !

to combine multiple conditions.

---

### switch

Used when comparing one variable against multiple values.

Cleaner than writing many else-if statements.

---

### match (PHP 8+)

A modern alternative to switch.

Safer and more concise.

---

### Short-hand if

A shorter way of writing simple if...else statements.

Uses:

- Ternary Operator
- Null Coalescing Operator

---

## Best Practices

- Write clear conditions.
- Keep nesting as low as possible.
- Use meaningful variable names.
- Prefer switch or match when checking many fixed values.
- Use Ternary only for simple conditions.
- Avoid unnecessary else blocks.

---

## Common Mistakes

- Using = instead of ==
- Forgetting braces {}
- Writing deeply nested if statements
- Comparing different data types unintentionally
- Forgetting operator precedence

---

## Interview Questions

- What is a condition?
- Why are conditions important?
- Difference between if and switch?
- Difference between switch and match?
- What is a Nested if?
- What is the difference between == and === inside conditions?
- When should you use Ternary Operator?
- What is Short-hand if?

---

## Practice

You will solve real-world problems using:

- Student Result
- ATM
- Login System
- Discount Calculator
- Grade Calculator
- University Admission

---

## Mini Project

Student Result Management System

Features:

- Input Student Name
- Marks
- Pass / Fail
- Grade
- Scholarship Eligibility
- Remarks

---

## Resources

Official PHP Documentation

https://www.php.net/manual/en/control-structures.if.php

https://www.php.net/manual/en/control-structures.switch.php

https://www.php.net/manual/en/control-structures.match.php

---

## Summary

In this chapter you will learn:

- if
- if...else
- if...elseif...else
- Nested if
- Logical Conditions
- switch
- match
- Short-hand if
- Best Practices
- Common Mistakes
- Interview Questions
- Practice
- Mini Project

After completing this chapter, you will be able to build real-world decision-making logic in PHP applications.