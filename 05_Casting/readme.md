Let's explore each type of casting in PHP with detailed explanations and examples:

### 1. Cast to String `(string)`:
To convert a variable to a string, you can use the `(string)` statement.

Example:
```php
$integer = 5;
$float = 5.34;
$bool = true;
$null = NULL;

$string_integer = (string)$integer;
$string_float = (string)$float;
$string_bool = (string)$bool;
$string_null = (string)$null;

var_dump($string_integer); // string(1) "5"
var_dump($string_float);   // string(5) "5.34"
var_dump($string_bool);    // string(1) "1"
var_dump($string_null);    // string(0) ""
```

### 2. Cast to Integer `(int)`:
To convert a variable to an integer, use the `(int)` statement.

Example:
```php
$float = 5.34;
$string1 = "25 kilometers";
$string2 = "kilometers 25";
$string3 = "hello";
$bool = true;
$null = NULL;

$int_float = (int)$float;
$int_string1 = (int)$string1;
$int_string2 = (int)$string2;
$int_string3 = (int)$string3;
$int_bool = (int)$bool;
$int_null = (int)$null;

var_dump($int_float);    // int(5)
var_dump($int_string1);  // int(25)
var_dump($int_string2);  // int(0)
var_dump($int_string3);  // int(0)
var_dump($int_bool);     // int(1)
var_dump($int_null);     // int(0)
```

### 3. Cast to Float `(float)`:
To convert a variable to a float, use the `(float)` statement.

Example:
```php
$integer = 5;
$string = "25 kilometers";
$bool = true;
$null = NULL;

$float_integer = (float)$integer;
$float_string = (float)$string;
$float_bool = (float)$bool;
$float_null = (float)$null;

var_dump($float_integer);  // float(5)
var_dump($float_string);   // float(25)
var_dump($float_bool);     // float(1)
var_dump($float_null);     // float(0)
```

### 4. Cast to Boolean `(bool)`:
To convert a variable to a boolean, use the `(bool)` statement.

Example:
```php
$integer = 5;
$float = 5.34;
$zero = 0;
$negative = -1;
$float_not_zero = 0.1;
$string1 = "hello";
$string2 = "";
$bool_true = true;
$null = NULL;

$bool_integer = (bool)$integer;
$bool_float = (bool)$float;
$bool_zero = (bool)$zero;
$bool_negative = (bool)$negative;
$bool_float_not_zero = (bool)$float_not_zero;
$bool_string1 = (bool)$string1;
$bool_string2 = (bool)$string2;
$bool_bool_true = (bool)$bool_true;
$bool_null = (bool)$null;

var_dump($bool_integer);        // bool(true)
var_dump($bool_float);          // bool(true)
var_dump($bool_zero);           // bool(false)
var_dump($bool_negative);       // bool(true)
var_dump($bool_float_not_zero); // bool(true)
var_dump($bool_string1);        // bool(true)
var_dump($bool_string2);        // bool(false)
var_dump($bool_bool_true);      // bool(true)
var_dump($bool_null);           // bool(false)
```

### 5. Cast to Array `(array)`:
To convert a variable to an array, use the `(array)` statement.

Example:
```php
$integer = 5;
$float = 5.34;
$string = "hello";
$bool = true;
$null = NULL;

$array_integer = (array)$integer;
$array_float = (array)$float;
$array_string = (array)$string;
$array_bool = (array)$bool;
$array_null = (array)$null;

var_dump($array_integer); // array(1) { [0]=> int(5) }
var_dump($array_float);   // array(1) { [0]=> float(5.34) }
var_dump($array_string);  // array(1) { [0]=> string(5) "hello" }
var_dump($array_bool);    // array(1) { [0]=> bool(true) }
var_dump($array_null);    // array(0) { }
```

### 6. Cast to Object `(object)`:
To convert a variable to an object, use the `(object)` statement.

Example:
```php
$integer = 5;
$float = 5.34;
$string = "hello";
$bool = true;
$null = NULL;

$object_integer = (object)$integer;
$object_float = (object)$float;
$object_string = (object)$string;
$object_bool = (object)$bool;
$object_null = (object)$null;

var_dump($object_integer); // object(stdClass)#1 (1) { ["scalar"]=> int(5) }
var_dump($object_float);   // object(stdClass)#1

 (1) { ["scalar"]=> float(5.34) }
var_dump($object_string);  // object(stdClass)#1 (1) { ["scalar"]=> string(5) "hello" }
var_dump($object_bool);    // object(stdClass)#1 (1) { ["scalar"]=> bool(true) }
var_dump($object_null);    // object(stdClass)#1 (0) { }
```

### 7. Cast to NULL `(unset)`:
To cast a variable to NULL, use the `(unset)` statement.

Example:
```php
$integer = 5;
$float = 5.34;
$string = "hello";
$bool = true;

$null_integer = (unset)$integer;
$null_float = (unset)$float;
$null_string = (unset)$string;
$null_bool = (unset)$bool;

var_dump($null_integer); // NULL
var_dump($null_float);   // NULL
var_dump($null_string);  // NULL
var_dump($null_bool);    // NULL
```

These examples demonstrate how to use casting statements to convert variables from one data type to another in PHP.