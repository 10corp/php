Certainly! In PHP, you can create arrays using either the `array()` function or the short array syntax, which involves wrapping comma-separated elements in square brackets `[ ]`. Let's explore both methods with examples:

1. Using `array()` function:
```php
// Creating an array of numbers using array() function
$number_array = array(0, 1, 2);

// Creating an array of strings using array() function
$string_array = array("first element", "second element");

// Creating an array of mixed data types using array() function
$mixed_array = array(1, "chicken", 78.2, "bubbles are crazy!");
```

2. Using short array syntax:
```php
// Creating an array of numbers using short array syntax
$number_array_short = [0, 1, 2];

// Creating an array of strings using short array syntax
$string_array_short = ["first element", "second element"];

// Creating an array of mixed data types using short array syntax
$mixed_array_short = [1, "chicken", 78.2, "bubbles are crazy!"];
```

Both methods achieve the same result. You can mix different data types within the same array, just like in the examples above.

Additionally, you can format arrays by placing each element on its own line, which can improve readability, especially for longer arrays:

```php
// Creating a long array with each element on its own line
$long_array = [
    1,
    2,
    3,
    4,
    5,
    6
];
```

This formatting style makes it easier to read and maintain the code, especially for arrays with many elements.