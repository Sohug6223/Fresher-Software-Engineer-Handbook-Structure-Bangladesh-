<?php

/*

PATTERN PRINTING

Definition

Pattern Printing is the process of
printing shapes using loops.

In simple words,

We use nested loops to print
different types of patterns.

Pattern printing helps us understand

- Nested Loops
- Row and Column Logic
- Problem Solving

When to Use

- Learning Nested Loops
- Interview Practice
- Competitive Programming
- Logic Building

*/

//Example 1
//square pattern

echo "Example 1".PHP_EOL;

for($row=1; $row<=5; $row++)
  {
    for($column=1; $column<=5; $column++)
      {
        echo "* ";
      }
      echo PHP_EOL;
  }

  echo PHP_EOL;

  // Example 2
  // Right Triangle
  
  echo "Example 2".PHP_EOL;

  for($row=1; $row<=5; $row++){
    for($column=1; $column<=$row; $column++)
      {
        echo "* ";
      }
      echo PHP_EOL;
  }
  echo PHP_EOL;

  // Example 3
  //Inverted Triangle

  echo "Example 3".PHP_EOL;

  for($row=5;$row>=1;$row--){
    for($column = 1; $column<=$row; $column++){
      echo "* ";
    }
    echo PHP_EOL;
    
  }

  echo PHP_EOL;

  // Example 4
// Number Triangle

echo "Example 4" . PHP_EOL;

for ($row = 1; $row <= 5; $row++) {

    for ($column = 1; $column <= $row; $column++) {

        echo $column . " ";

    }

    echo PHP_EOL;

}

echo PHP_EOL;