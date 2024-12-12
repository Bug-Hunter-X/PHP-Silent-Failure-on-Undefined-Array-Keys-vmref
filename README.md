# PHP Silent Failure on Undefined Array Keys

This repository demonstrates a common yet subtle error in PHP: the silent return of NULL when accessing undefined array keys.  This can lead to unexpected behavior and difficult-to-debug issues in your applications.

The `bug.php` file shows the problematic code, while `bugSolution.php` illustrates a safer approach using the `array_key_exists()` function to check for key existence before accessing array elements. 

This silent failure can cause significant problems.  Always check that your keys exist to avoid unexpected behavior.