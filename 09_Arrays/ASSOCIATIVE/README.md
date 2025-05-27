An associative array in PHP is a data structure that associates keys with values. Unlike indexed arrays where elements are accessed by their numerical index, associative arrays allow you to use meaningful keys to access their corresponding values.

Here's how you can define an associative array in PHP:

```php
$personal_info = [
    "name" => "John Doe",
    "age" => 30,
    "email" => "john@example.com",
    "birthday" => "1992-05-10",
    "ssn" => "123-45-6789",
    "favorite_food" => "Pizza"
];
```

In this example, each piece of information about John Doe is associated with a descriptive key:
- "name" corresponds to "John Doe"
- "age" corresponds to 30
- "email" corresponds to "john@example.com"
- "birthday" corresponds to "1992-05-10"
- "ssn" corresponds to "123-45-6789"
- "favorite_food" corresponds to "Pizza"

You can access values in an associative array by specifying the key within square brackets ([]):

```php
echo $personal_info["name"]; // Output: John Doe
echo $personal_info["age"]; // Output: 30
echo $personal_info["email"]; // Output: john@example.com
```

You can also change, add, or remove elements from an associative array using their keys:

```php
$personal_info["age"] = 31; // Update the age
$personal_info["address"] = "123 Main St"; // Add a new key-value pair
unset($personal_info["ssn"]); // Remove the SSN
```

Associative arrays are useful when you want to store data in a structured way where each piece of information has a descriptive label, making it easier to understand and manipulate the data.