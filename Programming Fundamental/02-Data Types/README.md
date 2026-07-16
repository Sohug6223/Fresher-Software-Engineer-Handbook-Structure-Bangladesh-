# Data types

## Definition

A data type defines the type of value a variable can store.

Every value in PHP has a data type.

The data type determines how PHP stores, processes, and performs operations on that value.

In simple words, a data type tells the computer what kind of data is being stored.

Data Type হলো এমন একটি নিয়ম, যা বলে একটি Variable-এর ভিতরে কী ধরনের Data রাখা হয়েছে।

## Why Data Types Are Important?

Imagine you are building a University Management System.

You need to store different kinds of information:

| Information       | Data Type |
| ----------------- | --------- |
| Student Name      | String    |
| Age               | Integer   |
| CGPA              | Float     |
| Is Active Student | Boolean   |
| Subjects          | Array     |
| Student Object    | Object    |


## Real-Life Example

Imagine a school locker room.
Each locker has a different purpose.

 Locker 1 - Books

 Locker 2 - Money

 Locker 3 - Water Bottle

 If everything is stored together in a random, unorganized way, it creates confusion and problems.

A computer works the same way- it stores different kinds of data separately.

The rule that defines and organizes these different kinds of data is called a Data Type.


 ```php
$name = "Sohug";
```
computer understand - Type:String,Value : Sohug

$age = 23; - Type:Integer,Value:23

$cgpa = 3.85; - Type:Float,Value:3.85

Without data types, a computer would not know how to process different kinds of data correctly.

## PHP Data Types -
PHP has eight primary data types.

### Scalar Types
.String
.Integer
.Float (Double)
.Boolean

### Compound Types
.Array
.Object

### Special Types
.NULL
.Resource

## 

Many beginners think that variables and data types are the same.

They are different.

A Variable is a container.

A Data Type describes what kind of value is stored inside that container.

| Variable | Data Type |
| -------- | --------- |
| `$name`  | String    |
| `$age`   | Integer   |
| `$cgpa`  | Float     |


## Summary-
In this chapter, you will learn:


.What is Data Type
.String
.Integer
.Float
.Boolean
.Array
.Object
.NULL
.Resource
.var_dump()
.gettype()
.Type Casting
.Type Juggling
.Truthy & Falsy
.Strict Types
.Interview Questions
.Practice
.Mini Project

## Resources

Official PHP Documentation

https://www.php.net/manual/en/language.types.intro.php