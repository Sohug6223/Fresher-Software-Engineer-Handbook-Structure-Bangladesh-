# Classes Interview Questions

## Basic Questions

### 1. What is a class?

**Answer:**

A class is a blueprint or template for creating objects. It defines the properties (data) and methods (behavior) that an object will have.

---

### 2. Why do we use classes?

**Answer:**

Classes help organize code, represent real-world entities, improve code reusability, and make applications easier to maintain.

---

### 3. What is the difference between a class and an object?

**Answer:**

A class is a blueprint, while an object is a real instance created from that blueprint.

---

### 4. Which keyword is used to declare a class in PHP?

**Answer:**

The `class` keyword.

Example:

```php
class Student
{
}
```

---

### 5. Can a class be empty?

**Answer:**

Yes. A class can be empty without properties or methods.

Example:

```php
class Student
{
}
```

---

### 6. What are properties in a class?

**Answer:**

Properties are variables declared inside a class. They store the data of an object.

---

### 7. What are methods in a class?

**Answer:**

Methods are functions declared inside a class. They define the behavior or actions of an object.

---

### 8. Where are properties declared?

**Answer:**

Inside the class body.

---

### 9. Where are methods declared?

**Answer:**

Inside the class body.

---

### 10. Can a class contain multiple properties?

**Answer:**

Yes.

---

### 11. Can a class contain multiple methods?

**Answer:**

Yes.

---

### 12. Can a class contain both properties and methods?

**Answer:**

Yes. Most real-world classes contain both.

---

### 13. Should class names be meaningful?

**Answer:**

Yes. Class names should clearly represent the entity they model.

Examples:

- Student
- Product
- Employee
- BankAccount

---

### 14. Which naming convention is recommended for class names?

**Answer:**

PascalCase.

Example:

- Student
- OnlineStore
- BankAccount

---

### 15. Is a class a real object?

**Answer:**

No.

A class is only a blueprint. An object is the real instance created from it.

---

# Intermediate Questions

### 16. Can a class exist without any properties?

**Answer:**

Yes.

---

### 17. Can a class exist without any methods?

**Answer:**

Yes.

---

### 18. Can a class contain only methods?

**Answer:**

Yes.

---

### 19. Can a class contain only properties?

**Answer:**

Yes.

---

### 20. Why should a class have a single responsibility?

**Answer:**

Because it makes the code easier to understand, maintain, and extend.

---

# Scenario-Based Questions

### 21. Design a class for a Library.

What properties and methods would you add?

Think about what properties and methods a Library should have.

Properties
$name
$location
$books
$members
Methods
addBook()
removeBook()
issueBook()
returnBook()
registerMember()
showLibraryInfo()

```php
class Library
{
    public $name;
    public $location;
    public $books;
    public $members;

    public function addBook()
    {
    }

    public function removeBook()
    {
    }

    public function issueBook()
    {
    }

    public function returnBook()
    {
    }

    public function registerMember()
    {
    }

    public function showLibraryInfo()
    {
    }
}
```
---

### 22. Design a class for a Restaurant.

What properties and methods would you add?

Think about what properties and methods a Restaurant should have.

Properties
$name
$location
$menu
$tables
Methods
addMenuItem()
removeMenuItem()
takeOrder()
serveFood()
generateBill()
showRestaurantInfo()

```php
class Restaurant
{
    public $name;
    public $location;
    public $menu;
    public $tables;

    public function addMenuItem()
    {
    }

    public function removeMenuItem()
    {
    }

    public function takeOrder()
    {
    }

    public function serveFood()
    {
    }

    public function generateBill()
    {
    }

    public function showRestaurantInfo()
    {
    }
}
```

---

### 23. Design a class for an Online Store.

What properties and methods would you add?

Think about what properties and methods an Online Store should have.

Properties
$storeName
$products
$customers
$orders
Methods
addProduct()
removeProduct()
placeOrder()
cancelOrder()
updateStock()
showStoreInfo()

```php
class OnlineStore
{
    public $storeName;
    public $products;
    public $customers;
    public $orders;

    public function addProduct()
    {
    }

    public function removeProduct()
    {
    }

    public function placeOrder()
    {
    }

    public function cancelOrder()
    {
    }

    public function updateStock()
    {
    }

    public function showStoreInfo()
    {
    }
}
```

---

### 24. Design a class for a Hospital.

What properties and methods would you add?

Think about what properties and methods a Hospital should have.

Properties
$name
$location
$doctors
$patients
Methods
admitPatient()
dischargePatient()
assignDoctor()
scheduleAppointment()
showHospitalInfo()

```php
class Hospital
{
    public $name;
    public $location;
    public $doctors;
    public $patients;

    public function admitPatient()
    {
    }

    public function dischargePatient()
    {
    }

    public function assignDoctor()
    {
    }

    public function scheduleAppointment()
    {
    }

    public function showHospitalInfo()
    {
    }
}
```


---

### 25. Design a class for a University.

What properties and methods would you add?

Think about what properties and methods a University should have.

Properties
$name
$location
$students
$teachers
Methods
admitStudent()
hireTeacher()
createCourse()
assignCourse()
showUniversityInfo()

```php
class University
{
    public $name;
    public $location;
    public $students;
    public $teachers;

    public function admitStudent()
    {
    }

    public function hireTeacher()
    {
    }

    public function createCourse()
    {
    }

    public function assignCourse()
    {
    }

    public function showUniversityInfo()
    {
    }
}
```

---

# Quick Revision

- What is a class?
- What keyword is used to create a class?
- What is a property?
- What is a method?
- What naming convention should class names follow?
- Can a class be empty?
- Can a class have multiple methods?
- Can a class have multiple properties?

---

# Common Interview Mistakes

- Confusing a class with an object.
- Using meaningless class names.
- Treating methods like properties.
- Mixing unrelated responsibilities into one class.
- Forgetting that a class is only a blueprint.