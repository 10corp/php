Here's a comprehensive overview of PHP's math functions with detailed explanations and examples:

### 1. `pi()` Function:
The `pi()` function returns the value of PI (π), which is approximately 3.14159.

Example:
```php
echo(pi()); // Output: 3.1415926535898
```

### 2. `min()` and `max()` Functions:
The `min()` function returns the lowest value among a list of arguments, and the `max()` function returns the highest value among a list of arguments.

Example:
```php
echo(min(0, 150, 30, 20, -8, -200)); // Output: -200
echo(max(0, 150, 30, 20, -8, -200)); // Output: 150
```

### 3. `abs()` Function:
The `abs()` function returns the absolute (positive) value of a number.

Example:
```php
echo(abs(-6.7)); // Output: 6.7
```

### 4. `sqrt()` Function:
The `sqrt()` function returns the square root of a number.

Example:
```php
echo(sqrt(64)); // Output: 8
```

### 5. `round()` Function:
The `round()` function rounds a floating-point number to its nearest integer.

Example:
```php
echo(round(0.60)); // Output: 1
echo(round(0.49)); // Output: 0
```

### 6. Random Numbers:
The `rand()` function generates a random number. You can specify optional `min` and `max` parameters to control the range of the random number.

Example:
```php
echo(rand());      // Output: Random number
echo(rand(10, 100));// Output: Random number between 10 and 100
```

These functions are useful for performing various mathematical operations in PHP, from simple arithmetic to more complex calculations. Understanding and utilizing these functions can greatly enhance your ability to work with numbers in PHP.