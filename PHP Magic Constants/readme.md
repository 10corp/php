Here's a comprehensive explanation of PHP magic constants along with examples:

### 1. `__CLASS__`:
- If used inside a class, the class name is returned.

Example:
```php
class MyClass {
    public function getClass() {
        return __CLASS__;
    }
}

$obj = new MyClass();
echo $obj->getClass(); // Output: MyClass
```

### 2. `__DIR__`:
- Returns the directory of the file.

Example:
```php
echo __DIR__; // Output: /path/to/your/directory
```

### 3. `__FILE__`:
- Returns the file name including the full path.

Example:
```php
echo __FILE__; // Output: /path/to/your/file.php
```

### 4. `__FUNCTION__`:
- If used inside a function, the function name is returned.

Example:
```php
function myFunction() {
    echo __FUNCTION__; // Output: myFunction
}
myFunction();
```

### 5. `__LINE__`:
- Returns the current line number.

Example:
```php
echo __LINE__; // Output: Current line number
```

### 6. `__METHOD__`:
- If used inside a function that belongs to a class, both the class and function name are returned.

Example:
```php
class MyClass {
    public function myMethod() {
        echo __METHOD__; // Output: MyClass::myMethod
    }
}
$obj = new MyClass();
$obj->myMethod();
```

### 7. `__NAMESPACE__`:
- If used inside a namespace, the name of the namespace is returned.

Example:
```php
namespace MyNamespace;

echo __NAMESPACE__; // Output: MyNamespace
```

### 8. `__TRAIT__`:
- If used inside a trait, the trait name is returned.

Example:
```php
trait MyTrait {
    public function getTrait() {
        return __TRAIT__;
    }
}

class MyClass {
    use MyTrait;
}

$obj = new MyClass();
echo $obj->getTrait(); // Output: MyTrait
```

### 9. `ClassName::class`:
- Returns the name of the specified class and the name of the namespace, if any.

Example:
```php
namespace MyNamespace;

class MyClass {}

echo MyClass::class; // Output: MyNamespace\MyClass
```

These magic constants provide useful information about the context in which they are used, making it easier to debug and understand your code.