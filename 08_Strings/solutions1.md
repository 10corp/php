Here are the solutions to the exercises:

1. **Basic Constant Declaration:**
   ```php
   define('SITE_NAME', 'My Website');
   ```

2. **Math Constants:**
   ```php
   define('PI', 3.14159);
   define('E', 2.71828);
   ```

3. **Using Constants in Calculations:**
   ```php
   $radius = 5;
   $area = PI * pow($radius, 2);
   echo "The area of the circle is: $area";
   ```

4. **Define Constants for Days of the Week:**
   ```php
   define('MONDAY', 1);
   define('TUESDAY', 2);
   // Similarly define constants for other days
   $today = date('N'); // N returns the ISO-8601 numeric representation of the day of the week
   switch ($today) {
       case MONDAY:
           echo "Today is Monday";
           break;
       case TUESDAY:
           echo "Today is Tuesday";
           break;
       // Similarly handle other days
   }
   ```

5. **Constants for Error Messages:**
   ```php
   define('ERROR_DB_CONNECTION_FAILED', 'Failed to connect to the database.');
   // Usage example:
   echo ERROR_DB_CONNECTION_FAILED;
   ```

6. **Using Constants in Conditional Statements:**
   ```php
   $year = 2024;
   if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
       echo "$year is a leap year";
   } else {
       echo "$year is not a leap year";
   }
   ```

7. **Constants for Configurations:**
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'username');
   define('DB_PASSWORD', 'password');
   define('DB_NAME', 'database_name');
   ```

8. **Constants for HTTP Status Codes:**
   ```php
   define('HTTP_OK', 200);
   define('HTTP_NOT_FOUND', 404);
   // Usage example:
   http_response_code(HTTP_OK);
   ```

9. **Creating Constants for Messages:**
   ```php
   define('SUCCESS_MESSAGE', 'Operation completed successfully');
   define('ERROR_MESSAGE', 'An error occurred while processing your request');
   ```

10. **Using Constants in Class Definitions:**
    ```php
    class Circle {
        const PI = 3.14159;
        private $radius;
        
        public function __construct($radius) {
            $this->radius = $radius;
        }
        
        public function calculateArea() {
            return self::PI * pow($this->radius, 2);
        }
    }
    ```

11. **Constants for Configuration Files:**
    Create a file `config.php` containing the configuration constants, then include it wherever needed:
    ```php
    // config.php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'username');
    define('DB_PASSWORD', 'password');
    define('DB_NAME', 'database_name');
    ```
    In your other PHP files:
    ```php
    include 'config.php';
    ```

12. **Constants for Currency Conversion:**
    ```php
    define('USD_TO_EUR', 0.82);
    define('EUR_TO_USD', 1.22);

    function convertCurrency($amount, $fromCurrency, $toCurrency) {
        if ($fromCurrency == 'USD' && $toCurrency == 'EUR') {
            return $amount * USD_TO_EUR;
        } elseif ($fromCurrency == 'EUR' && $toCurrency == 'USD') {
            return $amount * EUR_TO_USD;
        } else {
            return 'Unsupported currency conversion';
        }
    }
    ```

13. **Constants for Database Table Names:**
    ```php
    define('USERS_TABLE', 'users');
    define('ORDERS_TABLE', 'orders');
    ```

14. **Using Constants in Loops:**
    ```php
    $daysOfWeek = array(MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY);
    foreach ($daysOfWeek as $day) {
        switch ($day) {
            case MONDAY:
                echo "Monday\n";
                break;
            case TUESDAY:
                echo "Tuesday\n";
                break;
            // Similarly handle other days
        }
    }
    ```

15. **Constants for Regular Expressions:**
    ```php
    define('EMAIL_REGEX', '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/');
    define('URL_REGEX', '/^(https?|ftp):\/\/[^\s\/$.?#].[^\s]*$/');
    // Usage example:
    $email = 'example@example.com';
    if (preg_match(EMAIL_REGEX, $email)) {
        echo "Valid email address";
    } else {
        echo "Invalid email address";
    }
    ```

These solutions cover various scenarios where constants can be useful in PHP programming.