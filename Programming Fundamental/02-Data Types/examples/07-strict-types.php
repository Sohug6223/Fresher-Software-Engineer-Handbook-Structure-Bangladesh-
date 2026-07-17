<?php
/* 
When Strict Types is enabled, PHP no longer performs automatic type conversion.

 Instead, if a value of the wrong type is passed, PHP throws a TypeError.

 To enable Strict Types, add the following declaration at the very beginning of the PHP file, immediately after the opening <?php tag:

<?php
declare(strict_types=1);
*/

declare(strict_types=1);
// PHP Strict Types
//Example 1 Correct Data Types

function add(int $a, int $b)
{
  return $a + $b;
}

echo "Example 1".PHP_EOL;
echo add(10,20).PHP_EOL;
echo PHP_EOL;