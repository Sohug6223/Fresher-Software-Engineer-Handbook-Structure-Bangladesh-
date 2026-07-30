<?php

// PHP Constants



/*
Constant using define()
*/

define("SITE_NAME", "Fresher Programmer");

echo "===== define() Example =====" . PHP_EOL;
echo SITE_NAME . PHP_EOL;

echo PHP_EOL;


/*
Constant using const
*/

const VERSION = "1.0.0";

echo "===== const Example =====" . PHP_EOL;
echo VERSION . PHP_EOL;

echo PHP_EOL;


/*
Variables can change
*/

$name = "Sohug";

echo "===== Variable =====" . PHP_EOL;
echo $name . PHP_EOL;

$name = "Rahim";

echo $name . PHP_EOL;

echo PHP_EOL;


/*
Constants cannot change
*/

define("COUNTRY", "Bangladesh");

echo "===== Constant =====" . PHP_EOL;
echo COUNTRY . PHP_EOL;

/*

❌ Not Allowed

COUNTRY = "India";

define("COUNTRY", "India");

*/

