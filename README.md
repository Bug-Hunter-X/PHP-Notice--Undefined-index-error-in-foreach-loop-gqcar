# PHP Notice: Undefined index error in foreach loop
This example demonstrates a common error in PHP when working with arrays and foreach loops: the undefined index notice. This error occurs when you try to access an array key that doesn't exist.

The `bug.php` file shows a vulnerable function `calculate_total_vulnerable` that throws an error because of the undefined index 'quantity'.

The `bugSolution.php` file shows how to avoid this error using isset() or the null coalescing operator.