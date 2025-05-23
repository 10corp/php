Certainly! Modularity, as a programming principle, helps organize code into separate, manageable units, allowing for better maintainability and readability. One common way to achieve modularity in PHP is by using the `include` statement to bring code from external files into the main program.

Here's an example demonstrating how to use `include` to modularize your PHP code:

Suppose we have three PHP files:

1. **functions.php**: Contains reusable functions.
2. **constants.php**: Contains constant values used throughout the program.
3. **main.php**: The main program file where we include the other files and use their content.

Let's define some content in each file:

**functions.php**:
```php
<?php
// Function to calculate the square of a number
function square($num) {
    return $num * $num;
}

// Function to greet a user
function greet($name) {
    echo "Hello, $name!";
}
?>
```

**constants.php**:
```php
<?php
// Define constants for maximum allowed attempts
define('MAX_ATTEMPTS', 3);

// Define other constants as needed
define('DEFAULT_USERNAME', 'guest');
?>
```

**main.php**:
```php
<?php
// Include the necessary files
include "functions.php";
include "constants.php";

// Use functions and constants from the included files
echo "The square of 5 is " . square(5) . "\n";
greet(DEFAULT_USERNAME);

// Use constants from the included file
echo "\nMaximum allowed attempts: " . MAX_ATTEMPTS;
?>
```

When you run `main.php`, the output will be:
```
The square of 5 is 25
Hello, guest!
Maximum allowed attempts: 3
```

In this example:
- **functions.php** contains reusable functions like `square()` and `greet()`.
- **constants.php** defines constant values like `MAX_ATTEMPTS` and `DEFAULT_USERNAME`.
- **main.php** includes the other files using the `include` statement and uses their content.

By separating functions and constants into their own files, we promote modularity and separation of concerns in our codebase. This approach makes it easier to manage and maintain the code, especially as it grows larger and more complex.