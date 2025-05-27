Sure, variable reassignment in PHP allows you to change the value of a variable after it has been initially assigned. This feature is useful when you need to update the value of a variable based on certain conditions or calculations. Let's explore this with examples.

### Basic Variable Reassignment:
You can simply assign a new value to a variable using the assignment operator (`=`). Here's a basic example:

```php
$number = 10;
echo $number;  // Output: 10

$number = 20;  // Reassigning the variable
echo $number;  // Output: 20
```

In this example, `$number` is initially assigned the value `10`. Then, we reassign it to `20`, and when we echo `$number` again, it reflects the new value.

### Reassignment with Arithmetic Operations:
You can perform arithmetic operations on variables and then reassign the result to the same variable. For example:

```php
$number = 10;
echo $number;  // Output: 10

$number = $number + 5;  // Adding 5 to the current value of $number
echo $number;  // Output: 15

$number += 3;  // Shorter form of adding 3 to $number
echo $number;  // Output: 18
```

In this example, we're incrementing the value of `$number` by `5` first and then by `3`. Both expressions `$number = $number + 5;` and `$number += 3;` achieve the same result.

### Reassignment with String Concatenation:
You can concatenate strings and reassign the result to a variable:

```php
$name = "John";
echo $name;  // Output: John

$name = $name . " Doe";  // Concatenating "Doe" to the current value of $name
echo $name;  // Output: John Doe
```

Here, we're concatenating the string "Doe" to the existing value of `$name` and then reassigning the result back to `$name`.

### Reassignment with Conditional Logic:
Variable reassignment is often used in conjunction with conditional statements to dynamically change variable values based on certain conditions. For example:

```php
$age = 25;
echo $age;  // Output: 25

if ($age >= 18) {
    $status = "adult";
} else {
    $status = "minor";
}

echo $status;  // Output: adult
```

In this example, depending on the value of `$age`, the variable `$status` is assigned either "adult" or "minor".

### Conclusion:
Variable reassignment is a fundamental concept in PHP that allows for dynamic manipulation of variable values throughout the execution of a script. It's commonly used in various scenarios, such as updating counters, modifying strings, or changing variable values based on conditions.