<?php

/*
Task 1 
Create an empty string.
Check whether it is Truthy or Falsy.

Task 2
Create a variable with the value "PHP".
Check whether it is Truthy or Falsy.

Task 3
Create an empty array.
Check whether it is Truthy or Falsy.

Task 4
Create a variable with the value "0".
Check whether it is Truthy or Falsy.

Task 5
Create a variable with the value null.
Check whether it is Truthy or Falsy.
*/

//Task 1
$emptyString = "";
if($emptyString){
  echo "Task 1: Truthy" . PHP_EOL;
}

else {
  echo "Task 1: Falsy" . PHP_EOL;
}

//Task 2
$language = "PHP";

if($language){
  echo "Task 2: Truthy" . PHP_EOL;
}
else {
  echo "Task 2: Falsy" . PHP_EOL;
}

//Task 3 
$emptyArray = [];

if($emptyArray){
  echo "Task 3: Truthy" . PHP_EOL;
  }
  else {
    echo "Task 3: Falsy" . PHP_EOL;
  }

  //Task 4
  $value = "0";

  if($value){
    echo "Task 4: Truthy" . PHP_EOL;
  }
  else {
    echo "Task 4: Falsy" . PHP_EOL;
  }

//Task 5
$data = null;

if($data) {
  echo "Task 5: Truthy".PHP_EOL;
}
else {
  echo "Task 5: Falsy" . PHP_EOL;
}

/*
false
0
0.0
""
"0"
[]
null......these are falsy...
 */