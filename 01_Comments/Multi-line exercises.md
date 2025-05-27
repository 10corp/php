Let's add multi-line comments to some of the exercises:

1. **Basic Arithmetic Operations with Multi-line Comments:**
   ```php
   /*
   Exercise: Perform basic arithmetic operations
   This script calculates the sum, difference, product, and quotient of two numbers.
   */
   $num1 = 10; // Assign 10 to $num1
   $num2 = 5; // Assign 5 to $num2
   $sum = $num1 + $num2; // Calculate the sum
   $difference = $num1 - $num2; // Calculate the difference
   $product = $num1 * $num2; // Calculate the product
   $quotient = $num1 / $num2; // Calculate the quotient
   // Print the results
   echo "Sum: " . $sum . ", Difference: " . $difference . ", Product: " . $product . ", Quotient: " . $quotient;
   ```

2. **Array Operations with Multi-line Comments:**
   ```php
   /*
   Exercise: Perform operations on arrays
   This script calculates the sum and average of numbers in an array.
   */
   $numbers = [1, 2, 3, 4, 5]; // Define an array of numbers
   // Calculate the sum of numbers in the array
   $sum = array_sum($numbers);
   // Calculate the average of numbers in the array
   $average = $sum / count($numbers);
   // Print the results
   echo "Sum: " . $sum . ", Average: " . $average;
   ```

3. **Function Declaration and Calling with Multi-line Comments:**
   ```php
   /*
   Exercise: Declare and call a function
   This script defines a function to calculate the area of a rectangle and calls it with specified parameters.
   */
   // Function to calculate the area of a rectangle
   function calculateArea($length, $width) {
       return $length * $width;
   }
   $length = 10; // Set the length
   $width = 5; // Set the width
   // Call the function and print the result
   echo "Area of rectangle: " . calculateArea($length, $width);
   ```

4. **File Operations with Multi-line Comments:**
   ```php
   /*
   Exercise: Perform file operations
   This script opens a file, writes text to it, and then closes the file.
   */
   $file = fopen("example.txt", "w"); // Open a file for writing
   fwrite($file, "This is an example text."); // Write text to the file
   fclose($file); // Close the file
   echo "File written successfully.";
   ```

5. **Regular Expressions with Multi-line Comments:**
   ```php
   /*
   Exercise: Use regular expressions
   This script validates an email address using a regular expression pattern.
   */
   $email = "example@example.com"; // Set the email address
   // Validate the email address using regular expression
   if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
       echo "Valid email address.";
   } else {
       echo "Invalid email address.";
   }
   ```

These examples incorporate multi-line comments to provide descriptions of the exercises and explain what each script is intended to do. They help you understand the purpose and functionality of the code segments. Feel free to experiment with these examples to further enhance your understanding of multi-line comments in PHP.