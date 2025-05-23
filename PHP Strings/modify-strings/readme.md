PHP offers a rich set of built-in functions for string manipulation. Here's an overview of some commonly used string functions along with examples for each:

### 1. `strlen()`:
Returns the length of a string.

Example:
```php
$str = "Hello, World!";
echo strlen($str); // Prints: 13
```

### 2. `strtolower()` and `strtoupper()`:
Converts a string to lowercase or uppercase, respectively.

Example:
```php
$str = "Hello, World!";
echo strtolower($str); // Prints: hello, world!
echo strtoupper($str); // Prints: HELLO, WORLD!
```

### 3. `substr()`:
Returns a part of a string.

Example:
```php
$str = "Hello, World!";
echo substr($str, 0, 5); // Prints: Hello
```

### 4. `str_replace()`:
Replaces all occurrences of a search string with a replacement string.

Example:
```php
$str = "Hello, World!";
echo str_replace("World", "Universe", $str); // Prints: Hello, Universe!
```

### 5. `strpos()`:
Finds the position of the first occurrence of a substring in a string. Returns `false` if the substring is not found.

Example:
```php
$str = "Hello, World!";
echo strpos($str, "World"); // Prints: 7
```

### 6. `trim()`:
Removes whitespace or other characters from the beginning and end of a string.

Example:
```php
$str = "   Hello, World!   ";
echo trim($str); // Prints: Hello, World!
```

### 7. `explode()`:
Splits a string into an array by a specified delimiter.

Example:
```php
$str = "apple,banana,orange";
$arr = explode(",", $str);
print_r($arr); // Prints: Array ( [0] => apple [1] => banana [2] => orange )
```

### 8. `implode()` (or `join()`):
Joins array elements with a string.

Example:
```php
$arr = ["apple", "banana", "orange"];
$str = implode(", ", $arr);
echo $str; // Prints: apple, banana, orange
```

### 9. `ucfirst()` and `ucwords()`:
Capitalizes the first character of a string or each word in a string, respectively.

Example:
```php
$str = "hello, world!";
echo ucfirst($str); // Prints: Hello, world!
echo ucwords($str); // Prints: Hello, World!
```

These are just a few examples of the many string manipulation functions available in PHP. By mastering these functions, you can effectively manipulate and transform strings to suit your application's needs.