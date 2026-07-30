# PHP Strings Interview Questions


## Basic String Questions


## 1. What is a String in PHP?

### Answer:

A String is a sequence of characters used to represent text data.

In PHP, strings are written inside single quotes (`' '`) or double quotes (`" "`).

Example:

```php
$name = "Sohug";

echo $name;
```

Output:

```
Sohug
```


---

## 2. How do you create a String in PHP?

### Answer:

PHP strings can be created using:

1. Single quotes
2. Double quotes


Example:

```php
$name = 'Sohug';

$message = "Hello PHP";
```


---

## 3. Difference between Single Quotes and Double Quotes?

### Answer:

The main difference is variable interpolation.


### Single Quotes:

- Variables are not evaluated.
- Escape characters are limited.


Example:

```php
$name = "Sohug";

echo 'Hello $name';
```

Output:

```
Hello $name
```


### Double Quotes:

- Variables are evaluated.
- Escape sequences work.


Example:

```php
$name = "Sohug";

echo "Hello $name";
```

Output:

```
Hello Sohug
```


---

# String Operations


## 4. What is String Concatenation?

### Answer:

String concatenation means joining multiple strings together.

PHP uses the dot (`.`) operator for concatenation.


Example:

```php
$firstName = "Sohug";
$lastName = "mia";

echo $firstName . " " . $lastName;
```


Output:

```
Sohug mia
```


---

## 5. What is Variable Interpolation?

### Answer:

Variable interpolation means inserting variables directly inside double quoted strings.


Example:

```php
$name = "Sohug";

echo "Welcome $name";
```


Output:

```
Welcome Sohug
```


---

## 6. Why does PHP use . instead of + for string concatenation?

### Answer:

In PHP:

- `.` is used for string concatenation.
- `+` is used for mathematical addition.


Example:

Wrong:

```php
echo "Hello" + "PHP";
```


Correct:

```php
echo "Hello " . "PHP";
```


---

# String Functions


## 7. How to find the length of a String?

### Answer:

PHP uses `strlen()` function.


Example:

```php
$text = "Hello PHP";

echo strlen($text);
```


Output:

```
9
```


---

## 8. Difference between strlen() and str_word_count()?

### Answer:


| strlen() | str_word_count() |
|-|-|
| Counts characters | Counts words |
| Returns string length | Returns total words |


Example:

```php
$text = "PHP is easy";

strlen($text);

str_word_count($text);
```


---

## 9. How to convert String into uppercase and lowercase?

### Answer:


Uppercase:

```php
strtoupper($text);
```


Lowercase:

```php
strtolower($text);
```


---

## 10. What does trim() do?

### Answer:

`trim()` removes extra spaces from both sides of a string.


Example:

```php
$text = "   PHP   ";

echo trim($text);
```


Output:

```
PHP
```


---

# Searching Strings


## 11. Difference between strpos() and str_contains()?


### Answer:


| strpos() | str_contains() |
|-|-|
| Returns position/index | Returns true/false |
| Used when location is needed | Used only checking existence |


Example:


```php
strpos("Hello PHP","PHP");
```


Returns:

```
6
```


```php
str_contains("Hello PHP","PHP");
```


Returns:

```
true
```


---

## 12. Difference between strpos() and stripos()?


### Answer:

`strpos()` is case-sensitive.

`stripos()` is case-insensitive.


Example:

```php
stripos("Hello PHP","php");
```


Returns:

```
6
```


---

# Replace Strings


## 13. What is str_replace()?

### Answer:

`str_replace()` replaces a word or character inside a string.


Example:

```php
$text = "I Love PHP";

echo str_replace("PHP","Laravel",$text);
```


Output:

```
I Love Laravel
```


---

## 14. Difference between str_replace() and str_ireplace()?


### Answer:


| str_replace() | str_ireplace() |
|-|-|
| Case-sensitive | Case-insensitive |


Example:

```php
str_ireplace("php","Laravel","PHP is good");
```


---

# Substring


## 15. What is substr()?

### Answer:

`substr()` extracts a part of a string.


Example:

```php
$text = "Hello PHP";

echo substr($text,6);
```


Output:

```
PHP
```


---

## 16. How to get the last characters of a string?


### Answer:

Negative index is used.


Example:

```php
echo substr("Programming",-3);
```


Output:

```
ing
```


---

# String Comparison


## 17. What is strcmp()?


### Answer:

`strcmp()` compares two strings.


Example:

```php
strcmp("PHP","PHP");
```


Output:

```
0
```


---

## 18. Difference between strcmp() and strcasecmp()?


### Answer:


| strcmp() | strcasecmp() |
|-|-|
| Case-sensitive | Case-insensitive |


---

## 19. What is strnatcmp()?

### Answer:

`strnatcmp()` compares strings using natural order.


Example:

```
file2
file10
```


Natural comparison understands numeric order.


---

# Array Conversion


## 20. Difference between explode() and implode()?


### Answer:


| explode() | implode() |
|-|-|
| String → Array | Array → String |
| Splits data | Joins data |


Example:

```php
explode(",","PHP,Laravel");
```


```php
implode(", ",["PHP","Laravel"]);
```


---

# Formatting


## 21. Difference between printf() and sprintf()?


### Answer:


`printf()` prints formatted output directly.


`sprintf()` returns formatted string.


Example:


```php
printf("CGPA: %.2f",3.85);
```


```php
$text = sprintf("CGPA: %.2f",3.85);
```


---

## 22. What is number_format()?


### Answer:

`number_format()` formats numbers with decimal places and separators.


Example:

```php
number_format(1250000);
```


Output:

```
1,250,000
```


---

# Real-Life Questions


## 23. How do you create a URL slug in PHP?

### Answer:

A slug can be created by:

- Converting text to lowercase
- Replacing special characters
- Replacing spaces with hyphen


Example:

Input:

```
Learn PHP Framework
```


Output:

```
learn-php-framework
```


---

## 24. How do you check if an email contains @?


### Answer:

Using `str_contains()`.


Example:

```php
str_contains($email,"@");
```


---

## 25. How do you split an email address?


### Answer:

Using `explode()`.


Example:

```php
$email = "sohug@gmail.com";

explode("@",$email);
```


Result:

```
sohug
gmail.com
```


---

# Common Interview Mistakes


## Mistake 1

Using + for strings.


Wrong:

```php
"Hello"+"PHP"
```


Correct:

```php
"Hello"."PHP"
```


---

## Mistake 2

Ignoring user input spaces.


Better:

```php
trim($input);
```


---

## Mistake 3

Not checking case sensitivity.

Example:

`strpos()` and `str_replace()` are case-sensitive.


---

# End of String Interview Questions