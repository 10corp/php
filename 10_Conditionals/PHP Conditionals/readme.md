Sure, let's dive into nested conditional statements with detailed information and examples.

Nested conditional statements are a way of incorporating one or more conditional statements inside another conditional statement. This allows for more complex decision-making processes in your code.

### Syntax of Nested Conditional Statements:

```php
if (condition1) {
    // Code block 1
    if (condition2) {
        // Code block 2
    } else {
        // Code block 3
    }
} else {
    // Code block 4
}
```

In this syntax:

- `condition1` is the primary condition that is evaluated first.
- If `condition1` is true, then `code block 1` is executed.
- Inside `code block 1`, there is another conditional statement (`if` or `else if` or `else`) based on `condition2`.
- If `condition2` is true, then `code block 2` is executed; otherwise, `code block 3` is executed.
- If `condition1` is false, then `code block 4` is executed.

### Example:

Let's consider an example where we determine the cost of shipping based on the weight of a package and the distance it needs to be shipped.

```php
$weight = 15; // Weight of the package in kilograms
$distance = 500; // Distance to ship the package in kilometers

if ($weight <= 10) {
    // For lightweight packages
    if ($distance <= 100) {
        echo "Shipping cost: $5"; // Short distance
    } else {
        echo "Shipping cost: $10"; // Long distance
    }
} else {
    // For heavy packages
    if ($distance <= 100) {
        echo "Shipping cost: $15"; // Short distance
    } else {
        echo "Shipping cost: $25"; // Long distance
    }
}
```

In this example:

- We first check if the package weight is less than or equal to 10 kilograms.
- If it is, we check the distance. If the distance is less than or equal to 100 kilometers, the shipping cost is $5; otherwise, it's $10.
- If the package weight is greater than 10 kilograms, we check the distance similarly. If the distance is less than or equal to 100 kilometers, the shipping cost is $15; otherwise, it's $25.

Nested conditional statements help us to make decisions based on multiple conditions and create more dynamic and flexible code. They are essential for handling complex logic in programming.