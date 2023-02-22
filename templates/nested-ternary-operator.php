<?php

// $var = (condition)? true ((condition)? true: false) : false ((Condition)? ture: false);

// (Condition)? (True):(false);

$x = -2;

// if ($x >= 10) {
//  if ($x >= 100) {
//   echo "grater than 100";
//  } else {
//   echo "less than 100 but grater than 10";
//  }
// } else {
//  if ($x >= 0) {
//   echo "grater than zero but less than 10";
//  } else {
//   echo "Negative number";
//  }
// }

// $var = (condition)? true ((condition)? true: false) : false ((Condition)? ture: false);

$test = ($x >= 10) ? (($x >= 100) ? ("grater than 100") : ("less than 100 but grater than 10"))
: (($x >= 0) ? ("grater than zero but less than 10") : ("Negative number"));

echo $test;
echo PHP_EOL;

// Recursive function

// function name(start, end, inc = 1 ){
//     if(permentarA > perametar B){
//         return;
//     }

//     echo (perametar A)
//     peramentar A += pc;

//     name(start, end, inc = 1 );
// }

// name(argument1, argument2, argument3);

// Fibonacci number serice using function

// function fibonacci($a, $b, $start, $end)
// {
//  if ($start > $end) {
//   return;
//  }
//  $start++;
//  echo $a . " ";

//  $_temp = $a + $b;
//  $a     = $b;
//  $b     = $_temp;
//  fibonacci($a, $b, $start, $end);
// }
// fibonacci(0, 1, 1, 10);

// function factorial($a)
// {

//  if ($a <= 1) {
//   return 1;
//  }
//  return $a * factorial($a - 1);
// }
// // fibonacci(0, 1, 18);
// echo factorial(5);
