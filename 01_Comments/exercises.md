Here are 10 exercises with comments in PHP for you to learn from:

1. **Basic Arithmetic Operations:**
   ```php
   // Exercise: Perform basic arithmetic operations
   $num1 = 10; // Assign 10 to $num1
   $num2 = 5; // Assign 5 to $num2
   $sum = $num1 + $num2; // Calculate the sum
   $difference = $num1 - $num2; // Calculate the difference
   $product = $num1 * $num2; // Calculate the product
   $quotient = $num1 / $num2; // Calculate the quotient
   // Print the results
   echo "Sum: " . $sum . ", Difference: " . $difference . ", Product: " . $product . ", Quotient: " . $quotient;
   ```

2. **String Manipulation:**
   ```php
   // Exercise: Manipulate strings
   $name = "John"; // Assign "John" to $name
   $greeting = "Hello, " . $name . "!"; // Create a greeting message
   $uppercaseName = strtoupper($name); // Convert name to uppercase
   $length = strlen($name); // Get the length of the name
   // Print the results
   echo $greeting . " Uppercase Name: " . $uppercaseName . ", Length: " . $length;
   ```

3. **Conditional Statements:**
   ```php
   // Exercise: Use conditional statements
   $age = 25; // Set the age
   // Check if the person is eligible to vote
   if ($age >= 18) {
       echo "You are eligible to vote!";
   } else {
       echo "You are not eligible to vote yet.";
   }
   ```

4. **Looping:**
   ```php
   // Exercise: Use loops
   // Print numbers from 1 to 10
   for ($i = 1; $i <= 10; $i++) {
       echo $i . " ";
   }
   ```

5. **Array Operations:**
   ```php
   // Exercise: Perform operations on arrays
   $numbers = [1, 2, 3, 4, 5]; // Define an array of numbers
   // Calculate the sum of numbers in the array
   $sum = array_sum($numbers);
   // Calculate the average of numbers in the array
   $average = $sum / count($numbers);
   // Print the results
   echo "Sum: " . $sum . ", Average: " . $average;
   ```

6. **Function Declaration and Calling:**
   ```php
   // Exercise: Declare and call a function
   // Function to calculate the area of a rectangle
   function calculateArea($length, $width) {
       return $length * $width;
   }
   $length = 10; // Set the length
   $width = 5; // Set the width
   // Call the function and print the result
   echo "Area of rectangle: " . calculateArea($length, $width);
   ```

7. **File Operations:**
   ```php
   // Exercise: Perform file operations
   $file = fopen("example.txt", "w"); // Open a file for writing
   fwrite($file, "This is an example text."); // Write text to the file
   fclose($file); // Close the file
   echo "File written successfully.";
   ```

8. **Date and Time Operations:**
   ```php
   // Exercise: Perform date and time operations
   // Get the current date
   $currentDate = date("Y-m-d");
   // Get the current time
   $currentTime = date("H:i:s");
   // Print the current date and time
   echo "Current Date: " . $currentDate . ", Current Time: " . $currentTime;
   ```

9. **Error Handling:**
   ```php
   // Exercise: Handle errors
   $numerator = 10;
   $denominator = 0;
   // Check if the denominator is zero to avoid division by zero error
   if ($denominator != 0) {
       $result = $numerator / $denominator;
       echo "Result: " . $result;
   } else {
       echo "Cannot divide by zero!";
   }
   ```

10. **Regular Expressions:**
    ```php
    // Exercise: Use regular expressions
    $email = "example@example.com"; // Set the email address
    // Validate the email address using regular expression
    if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        echo "Valid email address.";
    } else {
        echo "Invalid email address.";
    }
    ```

These exercises cover various aspects of PHP programming, including basic operations, string manipulation, conditional statements, looping, arrays, functions, file operations, date and time, error handling, and regular expressions. Feel free to try them out and experiment with the code to deepen your understanding.