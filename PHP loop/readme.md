Let's summarize the key ideas with examples to illustrate how you can use PHP shorthand for various loops and integrate PHP variables within HTML.

### Key Concepts

1. **Opening a Code Block**: Use a colon `:` instead of an opening bracket `{`.
2. **Closing a Code Block**: Use a specific keyword followed by a semicolon `;` instead of a closing bracket `}`.
    - **For Loops**: `endfor;`
    - **Foreach Loops**: `endforeach;`
    - **While Loops**: `endwhile;`

### Example 1: For Loop

Traditional syntax:
```php
<ul>
<?php
for ($i = 0; $i < 3; $i++) {
?>
<li>Item <?php echo $i; ?></li>
<?php
}
?>
</ul>
```

Shorthand syntax:
```php
<ul>
<?php for ($i = 0; $i < 3; $i++): ?>
<li>Item <?= $i; ?></li>
<?php endfor; ?>
</ul>
```

### Example 2: Foreach Loop

Traditional syntax:
```php
<ul>
<?php
$items = ['Apple', 'Banana', 'Cherry'];
foreach ($items as $item) {
?>
<li><?php echo $item; ?></li>
<?php
}
?>
</ul>
```

Shorthand syntax:
```php
<ul>
<?php foreach ($items as $item): ?>
<li><?= $item; ?></li>
<?php endforeach; ?>
</ul>
```

### Example 3: While Loop

Traditional syntax:
```php
<ul>
<?php
$i = 0;
while ($i < 3) {
?>
<li>Number <?php echo $i; ?></li>
<?php
$i++;
}
?>
</ul>
```

Shorthand syntax:
```php
<ul>
<?php 
$i = 0;
while ($i < 3): 
?>
<li>Number <?= $i; ?></li>
<?php 
$i++;
endwhile; 
?>
</ul>
```

### Re-entering PHP Mode

When embedding PHP variables in the loop, make sure to re-enter PHP mode or use the echo shorthand `<?= ?>`:

```php
<ul>
<?php for ($i = 0; $i < 3; $i++): ?>
<li>Item <?= $i; ?></li> <!-- Echo shorthand -->
<?php endfor; ?>
</ul>
```

### Summary

- **For Loop**: `for (...) : ... endfor;`
- **Foreach Loop**: `foreach (...) : ... endforeach;`
- **While Loop**: `while (...) : ... endwhile;`
- **PHP Variables**: Re-enter PHP mode using `<?php ... ?>` or use the echo shorthand `<?= ... ?>`

Using the shorthand syntax makes your code cleaner and easier to read, especially when working with nested loops or complex structures. If you have any more questions or need further examples, feel free to ask!