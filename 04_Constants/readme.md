In PHP, constants are like variables but, once defined, they cannot be changed or undefined. Constants are defined using the `define()` function and are typically used for values that remain the same throughout the execution of a script.

Here's how you define a constant in PHP:

```php
define("CONSTANT_NAME", "constant_value");
```

For example:

```php
define("SITE_NAME", "My Website");
```

You can then use `SITE_NAME` throughout your script, and its value will remain constant.

Some key points about PHP constants:

1. **Naming conventions**: Constants follow the same naming rules as variables, but it's common practice to use uppercase letters and underscores for constant names to differentiate them from variables.

2. **Case-sensitive by default**: Constants are case-sensitive by default, so `CONSTANT_NAME` and `constant_name` would be considered different constants.

3. **Scope**: Constants are globally scoped by default, meaning they can be accessed from anywhere within the script once defined.

4. **Magic constants**: PHP also has several predefined constants called "magic constants" that change depending on where they are used. Examples include `__LINE__`, `__FILE__`, `__DIR__`, etc.

5. **Predefined constants**: PHP comes with several predefined constants for common values, such as `PHP_VERSION`, `PHP_OS`, `PHP_EOL`, etc.

Here's a simple example demonstrating the use of constants:

```php
define("SITE_NAME", "My Website");

echo "Welcome to " . SITE_NAME;
```

This would output:

```
Welcome to My Website
```