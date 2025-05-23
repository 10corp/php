We can use the modulo operator `%` to find out how many students will be left without groups when dividing them into groups of 6. Here's how you can do it:

```php
<?php
// Total number of students
$total_students = 82;

// Number of students per group
$students_per_group = 6;

// Calculate the remaining students without groups
$remaining_students = $total_students % $students_per_group;

// Output the result
echo "The number of students left without groups: $remaining_students\n";
?>
```

In this code:
- `$total_students` represents the total number of students, which is 82.
- `$students_per_group` represents the number of students per group, which is 6.
- `$remaining_students` calculates the remaining students without groups by finding the remainder of dividing the total number of students by the number of students per group using the modulo operator `%`.
- Finally, we echo out the result to the terminal.
