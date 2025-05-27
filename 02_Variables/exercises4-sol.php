<?php
// 1. Assigning values to variables
$num_languages = 4;
$months = 11;

// 2. Calculating total days spent studying
$days = $months * 16;

// 3. Calculating average days per language
$days_per_language = $days / $num_languages;

// Outputting the results
echo "Number of programming languages Meg has learned: $num_languages\n";
echo "Total months spent learning how to code: $months\n";
echo "Total days spent studying: $days\n";
echo "Average days per language: $days_per_language\n";