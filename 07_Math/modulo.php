<?php
//We have 82 students going on a class trip. We want to divide the students into groups of 6. Use the modulo operator to echo how many students will be left without groups.
$students = 82;
$groups = 6;
$without_groups = $students % $groups;
echo $without_groups; // Prints: 3