Let's dive deeper into the modulo operator (`%`) in PHP with some examples:

### Example 1: Basic Usage
```php
<?php
// Modulo operator examples
$result1 = 10 % 3; // Remainder of 10 divided by 3
$result2 = 15 % 4; // Remainder of 15 divided by 4

echo "The remainder of 10 divided by 3 is: $result1\n"; // Output: 1
echo "The remainder of 15 divided by 4 is: $result2\n"; // Output: 3
?>
```
In this example:
- `$result1` will be `1` because 10 divided by 3 equals 3 with a remainder of 1.
- `$result2` will be `3` because 15 divided by 4 equals 3 with a remainder of 3.

### Example 2: Using Variables
```php
<?php
// Using variables
$dividend = 20;
$divisor = 7;
$remainder = $dividend % $divisor;

echo "The remainder of $dividend divided by $divisor is: $remainder\n"; // Output: 6
?>
```
In this example:
- `$dividend` is the number to be divided, set to `20`.
- `$divisor` is the number to divide by, set to `7`.
- `$remainder` will be `6` because 20 divided by 7 equals 2 with a remainder of 6.

### Example 3: Negative Numbers
```php
<?php
// Modulo with negative numbers
$result1 = -10 % 3; // Remainder of -10 divided by 3
$result2 = 10 % -3; // Remainder of 10 divided by -3

echo "The remainder of -10 divided by 3 is: $result1\n"; // Output: -1
echo "The remainder of 10 divided by -3 is: $result2\n"; // Output: 1
?>
```
In this example:
- `$result1` will be `-1` because -10 divided by 3 equals -3 with a remainder of -1.
- `$result2` will be `1` because 10 divided by -3 equals -3 with a remainder of 1.

The modulo operator can be useful in various scenarios, such as checking for divisibility, cycling through a range of values, or formatting output in a periodic manner.