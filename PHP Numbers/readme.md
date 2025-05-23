Let's explore each aspect of PHP numbers in more detail with additional examples:

### 1. PHP Integers:

Integers are whole numbers without any decimal part. They can be positive, negative, or zero.

Examples:
```php
$integer1 = 10;
$integer2 = -20;
$integer3 = 0;
```

PHP integers can also be specified in different formats:

- Decimal (base 10)
- Hexadecimal (base 16, prefixed with `0x`)
- Octal (base 8, prefixed with `0`)
- Binary (base 2, prefixed with `0b`)

Examples of different integer formats:
```php
$decimal = 10; // Decimal
$hexadecimal = 0x1A; // Hexadecimal (equivalent to 26 in decimal)
$octal = 0755; // Octal (equivalent to 493 in decimal)
$binary = 0b1010; // Binary (equivalent to 10 in decimal)
```

### 2. PHP Floats:

Floats (or floating-point numbers) are numbers with decimal points or in exponential form.

Examples:
```php
$float1 = 10.5;
$float2 = -3.14;
$float3 = 1.2e3; // Exponential notation (1.2 * 10^3 = 1200)
```

### 3. PHP Infinity:

PHP considers a numeric value larger than `PHP_FLOAT_MAX` as infinite.

Example:
```php
$infinity = 1.9e411; // Infinite
```

### 4. PHP NaN (Not a Number):

NaN represents impossible mathematical operations.

Example:
```php
$nan = acos(8); // NaN
```

### 5. PHP Numerical Strings:

`is_numeric()` function checks if a variable is numeric (either a number or a numeric string).

Examples:
```php
$num1 = 5985;
$num2 = "5985";
$num3 = "59.85" + 100;

var_dump(is_numeric($num1)); // true
var_dump(is_numeric($num2)); // true
var_dump(is_numeric($num3)); // true
```

### Casting Strings and Floats to Integers:

You can cast a numerical value into an integer using `(int)`, `(integer)`, or `intval()`.

Examples:
```php
// Cast float to int
$float = 23465.768;
$int_cast_float = (int)$float; // 23465

// Cast string to int
$string = "23465.768";
$int_cast_string = (int)$string; // 23465
```

These examples provide a more detailed understanding of PHP numbers, including integers, floats, infinity, NaN, and numerical strings, along with how to cast between different types.