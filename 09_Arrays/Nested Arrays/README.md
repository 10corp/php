We mentioned that arrays can hold elements of any type—this even includes other arrays! We can use chained operations to access and change elements within a nested array:

$nested_arr = [[2, 4], [3, 9], [4, 16]];
$first_el = $nested_arr[0][0];
echo $first_el; // Prints: 2

Above, $nested_arr is an array with three array elements. The first, located at the 0th index, is the array [2, 4]. The expression $nested_arr[0] returns that array. We then index that array’s first element by appending an additional [0].

This can take practice to get used to. One helpful technique is to act like the computer; evaluate each part of the expression from left to right. By breaking down a complex expression into its simpler parts, it becomes easier to understand. Let’s walk through a more complicated example together:

$very_nested = [1, "b", 33, ["cat", 6.1, [9, "LOST!", 6], "mouse"], 7.1];

We want to change the element which is currently "LOST!" to "Found!". Let’s breakdown the steps:

We need the outermost array first: $very_nested[3] evaluates to the array ["cat", 6.1, [9, "LOST!", 6], "mouse"]
Next we need the array located at the 2nd location index: $very_nested[3][2] evaluates to the array [9, "LOST!", 6]
And finally, the element we’re looking for: $very_nested[3][2][1] evaluates to "LOST!"
$very_nested[3][2][1] = "Found!";

Let’s get some more practice with nested arrays!