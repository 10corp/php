Let's practice writing some chained operations using the correct order of operations (PEMDAS) in PHP. Here are some practice problems for you:

### Practice Problems

1. **Basic Arithmetic Operations**:
   ```php
   echo 5 + 3 * 2 - 8 / 4; // What is the output?
   ```
   - **Solution**:
      - Multiplication: \(3 * 2 = 6\)
      - Division: \(8 / 4 = 2\)
      - Addition: \(5 + 6 = 11\)
      - Subtraction: \(11 - 2 = 9\)
      - **Expected output**: `9`

2. **Using Parentheses**:
   ```php
   echo (5 + 3) * (2 - 8) / 4; // What is the output?
   ```
   - **Solution**:
      - Parentheses: \(5 + 3 = 8\) and \(2 - 8 = -6\)
      - Multiplication: \(8 * -6 = -48\)
      - Division: \(-48 / 4 = -12\)
      - **Expected output**: `-12`

3. **Combining Exponentiation with Other Operations**:
   ```php
   echo 2 + 3 ** 2 * 2; // What is the output?
   ```
   - **Solution**:
      - Exponentiation: \(3 ** 2 = 9\)
      - Multiplication: \(9 * 2 = 18\)
      - Addition: \(2 + 18 = 20\)
      - **Expected output**: `20`

4. **Complex Expression**:
   ```php
   echo 10 / 2 + 3 ** (2 - 1) * 5; // What is the output?
   ```
   - **Solution**:
      - Parentheses: \(2 - 1 = 1\)
      - Exponentiation: \(3 ** 1 = 3\)
      - Multiplication: \(3 * 5 = 15\)
      - Division: \(10 / 2 = 5\)
      - Addition: \(5 + 15 = 20\)
      - **Expected output**: `20`

5. **Nested Parentheses**:
   ```php
   echo (4 + (6 / 3) ** 2) * 2; // What is the output?
   ```
   - **Solution**:
      - Innermost Parentheses: \(6 / 3 = 2\)
      - Exponentiation: \(2 ** 2 = 4\)
      - Addition: \(4 + 4 = 8\)
      - Multiplication: \(8 * 2 = 16\)
      - **Expected output**: `16`

### Additional Problems

6. **Using All Operations**:
   ```php
   echo (7 - 3 + 2) ** 2 / 2 * 3; // What is the output?
   ```
   - **Solution**:
      - Parentheses: \(7 - 3 + 2 = 6\)
      - Exponentiation: \(6 ** 2 = 36\)
      - Division: \(36 / 2 = 18\)
      - Multiplication: \(18 * 3 = 54\)
      - **Expected output**: `54`

7. **Combining Negative Numbers and Operations**:
   ```php
   echo -3 + 4 * 2 - (6 / 3) ** 2; // What is the output?
   ```
   - **Solution**:
      - Parentheses: \(6 / 3 = 2\)
      - Exponentiation: \(2 ** 2 = 4\)
      - Multiplication: \(4 * 2 = 8\)
      - Addition and Subtraction: \(-3 + 8 - 4 = 1\)
      - **Expected output**: `1`

### Explanation

In these examples, the operations are carried out in the correct order of precedence:

1. **Parentheses**: Operations inside parentheses are evaluated first.
2. **Exponents**: Next, exponentiation is performed.
3. **Multiplication and Division**: These operations are evaluated from left to right.
4. **Addition and Subtraction**: Lastly, addition and subtraction are performed from left to right.

Practicing these problems will help you understand and remember the order of operations in PHP. Happy coding!