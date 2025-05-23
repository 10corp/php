Sure, let's delve into printing arrays in PHP with the `print_r()` and `implode()` functions.

1. **print_r() Function**:
   The `print_r()` function in PHP is used to print human-readable information about a variable, especially useful for arrays. It displays structured information about one or more expressions that includes its type and value. When applied to an array, it outputs the array's structure along with its elements.

   Example:
   ```php
   $number_array = [0, 1, 2];
   print_r($number_array);
   ```
   Output:
   ```
   Array
   (
       [0] => 0
       [1] => 1
       [2] => 2
   )
   ```

2. **implode() Function**:
   The `implode()` function in PHP is used to join the elements of an array into a string. It takes two parameters: the glue string, which is inserted between the elements, and the array to be joined.

   Example:
   ```php
   $number_array = [0, 1, 2];
   echo implode(", ", $number_array);
   ```
   Output:
   ```
   0, 1, 2
   ```

   In this example, the elements of the array `$number_array` are joined together with ", " as the glue string, resulting in a string where each element is separated by ", ".

Using these functions, you can effectively print the contents of arrays in PHP, either in a structured format with `print_r()` or as a string with `implode()`. These functions are handy tools for debugging and displaying array data in PHP.