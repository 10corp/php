Adding elements to an array and changing existing elements are common operations when working with arrays in PHP. Let's go through some examples to illustrate these concepts.

### Adding Elements to an Array:
We can add elements to the end of an existing array using the `[]` syntax and the assignment operator (`=`).

Example:
```php
$fruits = ["apple", "banana", "orange"];

// Add a new fruit to the end of the array
$fruits[] = "grape";

// Print the updated array
print_r($fruits);
```
Output:
```
Array
(
    [0] => apple
    [1] => banana
    [2] => orange
    [3] => grape
)
```

### Changing Elements in an Array:
We can change the value of an existing element in an array by accessing it using its index and then assigning a new value to it.

Example:
```php
$colors = ["red", "green", "blue"];

// Change the second element to "yellow"
$colors[1] = "yellow";

// Print the updated array
print_r($colors);
```
Output:
```
Array
(
    [0] => red
    [1] => yellow
    [2] => blue
)
```

### Combining Adding and Changing:
We can also combine adding elements and changing existing elements in the same array operation.

Example:
```php
$names = ["Alice", "Bob", "Charlie"];

// Add a new name at index 3 and change the name at index 1
$names[3] = "David";
$names[1] = "Eve";

// Print the updated array
print_r($names);
```
Output:
```
Array
(
    [0] => Alice
    [1] => Eve
    [2] => Charlie
    [3] => David
)
```

These examples demonstrate how to add elements to an array and change existing elements, which are essential operations when working with arrays in PHP.