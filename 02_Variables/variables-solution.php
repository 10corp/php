<?php
/*
 * 1.Variable Declaration and Printing:
 * Declare a variable named $name and assign your name to it. Print the value of the variable.
 * Declare variables $age and $city and assign appropriate values. Print them.
 */
$name = "Mahmudul Hasan Tuhin";
$age = 39;
$city = "Dhaka";

Print $name . "<br>";
Print $age . "<br>";
Print $city;

/*
 * 2.Variable Types:
 * Declare variables of different types: integer, float, string, boolean.
 * Print out the variables along with their types using var_dump().
 */

$int = 1;
$float = 0.1;
$string = 'Hello World';
$boolean = true;

var_dump($int);
var_dump($float);
var_dump($string);
var_dump($boolean);

/*
 * 3.Variable Manipulation:
 * Create two variables $num1 and $num2 and assign them integer values.
 * Perform addition, subtraction, multiplication, and division operations on these variables and print the results.
 */

$num1 = 1;
$num2 = 2;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
/*
 * Your code for performing arithmetic operations on the variables $num1 and $num2 is correct.
 * However, it's recommended to use echo instead of print for consistency and readability.
 * */
print $addition . "<br>";
print $subtraction . "<br>";
print $multiplication . "<br>";
print $division . "<br>";

/*
 * 4.Concatenation:
 * Declare two variables $firstName and $lastName and assign your first name and last name to them respectively.
 * Concatenate these variables to form a full name and print it.
 */
$firstName = "Mahmudul Hasan";
$lastName = "Tuhin";

echo $firstName . " " . $lastName . "<br>";

/*
 * Variable Data Filtering:
 * Create a form with input fields for name, email, and age.
 * Use PHP to retrieve the form data.
 * Filter and sanitize the input data using appropriate PHP functions
 * Print out the sanitized data.
 */
// Retrieving and sanitizing form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define an array to store sanitized data
    $sanitized_data = array();

    // Sanitize and filter name
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // Sanitize and filter email
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    // Sanitize and filter age
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

    // Store sanitized data in an array
    $sanitized_data['Name'] = $name;
    $sanitized_data['Email'] = $email;
    $sanitized_data['Age'] = $age;

    // Print out sanitized data
    echo "<h2>Sanitized Data:</h2>";
    foreach ($sanitized_data as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="age">Age:</label>
    <input type="number" id="age" name="age" required><br><br>

    <input type="submit" value="Submit">
</form>

?>