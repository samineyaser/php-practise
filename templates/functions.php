<?php
function isEven($n)
{
 if ($n % 2 == 0) {
  return "$n is an even number";
 }
 return "$n is a odd number";
}

function factorial(int $a)
{
 $result = 1;
 for ($i = $a; $i > 1; $i--) {
  $result *= $i;
 }
 return $result;
}

function serve($food, $numberOfItem = "1 cup")
{
 echo "{$numberOfItem} of {$food} will be served.";
}
