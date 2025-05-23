Certainly! Let's go through each mistake and provide detailed explanations with examples:

**Mistake 1: Not Treating Expressions as Distinct**
```php
$number = 5;
if ($number === 1 || 2 || 3)
{
  echo "Your number is 1, 2, or 3";
} else {
  echo "Your number is NOT 1, 2, or 3";
}
```
Explanation: In this code, the condition `$number === 1 || 2 || 3` doesn't work as intended. It actually evaluates as `(false) || (true) || (true)`, which is always true. To fix this, each condition should be evaluated separately:
```php
$number = 5;
if ($number === 1 || $number === 2 || $number === 3)
{
  echo "Your number is 1, 2, or 3";
} else {
  echo "Your number is NOT 1, 2, or 3";
}
```

**Mistake 2: Omitting Parentheses**
```php
$withdrawal = 120; 
$balance = 110;
if (!$balance < $withdrawal){
     echo "Success";
     $balance -= $withdrawal;
} else {
  echo "Insufficient Funds";
} 
```
Explanation: In this code, the `!$balance` is evaluated first, which results in `false` since `$balance` is not zero. Therefore, `!$balance < $withdrawal` evaluates to `true`, leading to "Success" being echoed despite insufficient funds. To fix this, use parentheses:
```php
$withdrawal = 120; 
$balance = 110;
if (!($balance < $withdrawal)){
     echo "Success";
     $balance -= $withdrawal;
} else {
  echo "Insufficient Funds";
} 
```

**Mistake 3: Not Thinking Like a Computer**
```php
if ($response !== "yes" || $response !== "no"){
  echo "You must type either yes or no";
}
```
Explanation: In this code, the condition `$response !== "yes" || $response !== "no"` always evaluates to true because it's impossible for `$response` to be both "yes" and "no" at the same time. To fix this, use the logical AND operator (`&&`):
```php
if ($response !== "yes" && $response !== "no"){
  echo "You must type either yes or no";
}
```
By avoiding these common mistakes, we can write more effective and bug-free code.