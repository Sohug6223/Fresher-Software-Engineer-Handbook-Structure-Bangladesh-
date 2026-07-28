# Arrays Interview Questions & Answers

## Question 1: What is an array in PHP?

### Answer

An array is a special variable that can store multiple values in a single variable.

### Example

```php
$fruits = ["Apple", "Banana", "Orange"];
```

---

## Question 2: Why do we use arrays?

### Answer

Arrays are used to store multiple related values under a single variable instead of creating many separate variables.

Instead of writing:

```php
$fruit1 = "Apple";
$fruit2 = "Banana";
$fruit3 = "Orange";
```

We can write:

```php
$fruits = ["Apple", "Banana", "Orange"];
```

---

## Question 3: How many types of arrays are available in PHP?

### Answer

PHP has three main types of arrays.

- Indexed Array
- Associative Array
- Multidimensional Array

---

## Question 4: What is an Indexed Array?

### Answer

An indexed array stores values using numeric indexes.

The first index always starts from **0**.

### Example

```php
$languages = ["PHP", "JavaScript", "Python"];
```

```
0 => PHP
1 => JavaScript
2 => Python
```

---

## Question 5: What is an Associative Array?

### Answer

An associative array stores values using custom keys instead of numeric indexes.

### Example

```php
$student = [
    "Name" => "Sohug",
    "Department" => "CSE",
    "CGPA" => 3.90
];
```

---

## Question 6: What is a Multidimensional Array?

### Answer

A multidimensional array is an array that contains one or more arrays.

### Example

```php
$students = [
    [
        "Name" => "Rahim",
        "Department" => "CSE"
    ],
    [
        "Name" => "Karim",
        "Department" => "EEE"
    ]
];
```

---

## Question 7: How do you access an indexed array element?

### Answer

You access an indexed array element using its index.

### Example

```php
echo $fruits[0];
```

---

## Question 8: How do you access an associative array element?

### Answer

You access an associative array element using its key.

### Example

```php
echo $student["Name"];
```

---

## Question 9: Which loop is best for arrays?

### Answer

The **foreach** loop is the best choice because it automatically iterates through every element of an array.

### Example

```php
foreach ($fruits as $fruit) {
    echo $fruit . PHP_EOL;
}
```

---

## Question 10: What does `count()` do?

### Answer

The `count()` function returns the total number of elements in an array.

### Example

```php
echo count($fruits);
```

---

## Question 11: What is the difference between `print_r()` and `var_dump()`?

### Answer

| print_r() | var_dump() |
|------------|------------|
| Prints array in a readable format | Prints complete information about variables |
| Easy to read | Shows data type and value |
| Mostly used for arrays | Used for debugging |

---

## Question 12: What is the difference between `sort()` and `rsort()`?

### Answer

| sort() | rsort() |
|---------|----------|
| Sorts in ascending order | Sorts in descending order |

### Example

```php
sort($numbers);

rsort($numbers);
```

---

## Question 13: What is the difference between `array_push()` and `array_unshift()`?

### Answer

| array_push() | array_unshift() |
|---------------|-----------------|
| Adds elements at the end | Adds elements at the beginning |

### Example

```php
array_push($fruits, "Mango");

array_unshift($fruits, "Apple");
```

---

## Question 14: What is the difference between `array_pop()` and `array_shift()`?

### Answer

| array_pop() | array_shift() |
|--------------|---------------|
| Removes the last element | Removes the first element |

### Example

```php
array_pop($fruits);

array_shift($fruits);
```

---

## Question 15: What does `array_merge()` do?

### Answer

The `array_merge()` function combines two or more arrays into a single array.

### Example

```php
$array1 = [1, 2];
$array2 = [3, 4];

$result = array_merge($array1, $array2);
```

---

## Question 16: What does `in_array()` do?

### Answer

The `in_array()` function checks whether a value exists in an array.

### Example

```php
if (in_array("PHP", $languages)) {
    echo "Found";
}
```

---

## Question 17: What does `array_key_exists()` do?

### Answer

The `array_key_exists()` function checks whether a specific key exists in an associative array.

### Example

```php
if (array_key_exists("Email", $student)) {
    echo "Email Found";
}
```

---

## Question 18: What is Array Destructuring?

### Answer

Array destructuring allows you to assign array values to separate variables in a single statement.

### Example

```php
$student = ["Sohug", "CSE", 3.90];

[$name, $department, $cgpa] = $student;
```

---

## Question 19: What is the Spread Operator in PHP?

### Answer

The spread operator (`...`) expands the elements of one array into another array.

### Example

```php
$array1 = [1, 2];
$array2 = [3, 4];

$result = [...$array1, ...$array2];
```

---

## Question 20: What is the difference between `array_merge()` and the Spread Operator?

### Answer

Both are used to merge arrays.

| array_merge() | Spread Operator |
|----------------|-----------------|
| Function | Operator |
| Available in older PHP versions | Available from PHP 7.4+ |
| More traditional | More modern and readable |

### Example

```php
$result1 = array_merge($array1, $array2);

$result2 = [...$array1, ...$array2];
```

---

# Summary

After completing the Arrays chapter, you should be able to:

- Create Indexed Arrays
- Create Associative Arrays
- Create Multidimensional Arrays
- Access array elements
- Traverse arrays using `foreach`
- Use common array functions
- Merge arrays
- Search arrays
- Sort arrays
- Modify arrays
- Use Array Destructuring
- Use the Spread Operator
- Solve basic array interview problems
