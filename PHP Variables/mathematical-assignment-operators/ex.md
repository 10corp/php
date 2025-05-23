1. We’re going to do a mathematical “magic” trick. Create a variable, $my_num and assign as its value any number.
   Next, create a second variable, $answer and assign $my_num as its value.
2. Use the addition assignment operator to add 2 to $answer.
   3.Use the multiplication assignment operator to multiply $answer by 2.
   4.Use the subtraction assignment operator to subtract 2 from $answer.
   5.Use the division assignment operator to divide $answer by 2.
   6.Almost there. Use the subtraction assignment operator to subtract your original number ($my_num) from $answer. Finally, use echo to print $answer to the terminal.
   If everything went as it should, $answer should be 1. No matter what your original number was! Don’t believe us? Go ahead try it with a different number for the value of $my_num.
   
3. Explain with PHP code
   Sure, here's the PHP code to perform the magic trick:

```php
<?php
// Step 1: Assign any number to $my_num
$my_num = 10; // You can choose any number

// Step 2: Assign $my_num to $answer
$answer = $my_num;

// Step 3: Use the addition assignment operator to add 2 to $answer
$answer += 2;

// Step 4: Use the multiplication assignment operator to multiply $answer by 2
$answer *= 2;

// Step 5: Use the subtraction assignment operator to subtract 2 from $answer
$answer -= 2;

// Step 6: Use the division assignment operator to divide $answer by 2
$answer /= 2;

// Step 7: Use the subtraction assignment operator to subtract $my_num from $answer
$answer -= $my_num;

// Output the result
echo "The final value of \$answer is: $answer\n";
?>
```

Now, regardless of the original value of `$my_num`, after performing all the operations including subtracting the original number from the result, `$answer` will be `1`. You can try different values for `$my_num`, and the result will always be `1`.