Certainly! Let's explore `array_pop()` and `array_push()` functions with examples:

1. **array_pop() Function:**

   The `array_pop()` function removes the last element from an array and returns it. Here's how it works:

   ```php
   $my_array = ["apple", "banana", "cherry"];
   
   $popped_element = array_pop($my_array);
   
   echo $popped_element; // Outputs: cherry
   echo implode(", ", $my_array); // Outputs: apple, banana
   ```

   In this example:
    - Initially, `$my_array` contains three elements: "apple", "banana", and "cherry".
    - After calling `array_pop($my_array)`, the last element "cherry" is removed from the array and assigned to `$popped_element`.
    - The updated array `$my_array` now contains only "apple" and "banana".

2. **array_push() Function:**

   The `array_push()` function adds one or more elements to the end of an array. It returns the new number of elements in the array after the operation. Here's how it works:

   ```php
   $fruits = ["apple", "banana"];
   
   $num_added = array_push($fruits, "cherry", "date");
   
   echo $num_added; // Outputs: 4
   echo implode(", ", $fruits); // Outputs: apple, banana, cherry, date
   ```

   In this example:
    - Initially, `$fruits` contains two elements: "apple" and "banana".
    - After calling `array_push($fruits, "cherry", "date")`, two more elements "cherry" and "date" are added to the end of the array.
    - The `array_push()` function returns the new number of elements in the array after adding the new elements, which is `4`.
    - Finally, we print the updated array using `implode()` to show all elements separated by commas.

These functions are handy for manipulating arrays, especially when you need to add or remove elements from the end of an array.