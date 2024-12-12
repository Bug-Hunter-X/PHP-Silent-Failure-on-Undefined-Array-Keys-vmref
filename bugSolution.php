A more robust approach involves checking if a key exists before attempting to access it.  PHP's `array_key_exists()` function is ideal for this purpose:

```php
$myArray = ['a' => 1, 'b' => 2];

if (array_key_exists('c', $myArray)) {
  $value = $myArray['c'];
} else {
  $value = null; // Or handle the missing key appropriately
}
//or use the null coalescing operator
$value = $myArray['c'] ?? null; 
```

By explicitly checking for the key's existence, you prevent the silent return of NULL and make your code more reliable and easier to debug.  The `??` null coalescing operator provides a concise way to handle the case where the key is not found.