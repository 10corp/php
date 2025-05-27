Let's delve into each PHP data type with detailed explanations and examples:

### 1. String:
A string is a sequence of characters, enclosed within single quotes (`'`) or double quotes (`"`).

Example:
```php
$str1 = "Hello world!";
$str2 = 'Hello PHP!';
```

### 2. Integer:
An integer is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Example:
```php
$int = 123;
```

### 3. Float:
A float (or floating-point number) is a number with a decimal point or in exponential form.

Example:
```php
$float1 = 10.365;
$float2 = 3.14e2; // 314
```

### 4. Boolean:
A Boolean represents two possible states: `TRUE` or `FALSE`.

Example:
```php
$bool = true;
```

### 5. Array:
An array stores multiple values in a single variable.

Example:
```php
$cars = array("Volvo", "BMW", "Toyota");
```

### 6. Object:
Classes and objects are the two main aspects of object-oriented programming. An object is an instance of a class.

Example:
```php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");
```

### 7. NULL:
`NULL` is a special data type that represents a variable with no value assigned to it.

Example:
```php
$var = null;
```

### Getting the Data Type:
You can use the `var_dump()` function to get the data type of any variable.

Example:
```php
$x = 5;
var_dump($x); // Output: int(5)
```

### Change Data Type:
You can change the data type of a variable using casting.

Example:
```php
$x = 5;
$x = (string)$x; // $x is now a string
var_dump($x); // Output: string(1) "5"
```

Understanding PHP data types and how to manipulate them is crucial for effective programming. These examples should provide a comprehensive overview of each data type and how to work with them in PHP.