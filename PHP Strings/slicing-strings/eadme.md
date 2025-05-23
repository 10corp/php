PHP, the `substr()` function is used to extract a portion of a string, known as a substring. You can specify the start index and optionally the length of the substring you want to extract. Here's how you can use the `substr()` function with examples:

### Syntax:
```php
substr(string $string, int $start, int $length = null): string
```

- `$string`: The input string from which to extract the substring.
- `$start`: The start index from which to begin extracting characters. It is a zero-based index, where `0` represents the first character.
- `$length` (optional): The number of characters to extract from the string. If omitted, the substring will extend to the end of the string.

### Example 1: Extracting a Substring from a Specific Index:
```php
$str = "Hello, World!";
$substring = substr($str, 7); // Starting from index 7
echo $substring; // Prints: World!
```
In this example, `substr($str, 7)` returns the substring starting from index 7, which corresponds to the character "W" in "World!".

### Example 2: Extracting a Substring with a Specific Length:
```php
$str = "Hello, World!";
$substring = substr($str, 0, 5); // Starting from index 0, with length 5
echo $substring; // Prints: Hello
```
Here, `substr($str, 0, 5)` returns the substring starting from index 0 with a length of 5 characters, resulting in "Hello".

### Example 3: Extracting a Substring with a Negative Start Index:
```php
$str = "Hello, World!";
$substring = substr($str, -6); // Starting from index -6 (counting from the end)
echo $substring; // Prints: World!
```
In this example, `substr($str, -6)` extracts the substring starting from the 6th character from the end of the string, resulting in "World!".

### Example 4: Extracting a Substring with a Negative Start Index and Length:
```php
$str = "Hello, World!";
$substring = substr($str, -6, 3); // Starting from index -6 with length 3
echo $substring; // Prints: Wor
```
Here, `substr($str, -6, 3)` extracts the substring starting from the 6th character from the end with a length of 3 characters, resulting in "Wor".

### Note:
- If the start index is negative, it is counted from the end of the string.
- If the length parameter is omitted, the substring will extend to the end of the string.

The `substr()` function is handy for extracting substrings from strings based on specific criteria, providing flexibility in string manipulation tasks.