<?php
/*
 * Heya! Can you help me out. Use echo to print the answer to the terminal.
 *
 * I'm trying to figure out how much money I should have. At the start of the day I had $94.
 *
 * I spent $4.25 on coffee
 * A friend gave me $7 that he owed me
 * I went out for a meal. The bill was $23.50, but I also gave a 20% tip.
 * Some friends and I found $20 on the ground and split it four ways
 * I think that's everything.
 *
 * Use a single chained operation to get your result!
 */

// Write your code below:
$coffee = 4.25;
$friend = 7;
$meal = 23.50;
$tip = 0.20;
$found = 20;
$split = 4;
echo 94 - $coffee + $friend - $meal - ($meal * $tip) + ($found / $split);
//echo 94 - 4.25 + 7 - 23.50 - (23.50 * 0.20) + (20 / 4);
// If you performed the calculation correctly, the number 73.55 should appear in the terminal.
// If you see the number 73.55, you've successfully completed the challenge!