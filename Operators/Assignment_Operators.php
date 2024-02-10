<?php

/*
Operators
- Used To Perform Operations On Values.

Assignment Operators
- Used To Write Value To Another

- $a [+=]  $b => Addition
- $a [-=]  $b => Subtraction
- $a [*=]  $b => Multiplication
- $a [/=]  $b => Division
- $a [%=]  $b => Modulus
- $a [**=] $b => Exponentiation
 */

$a = 10;
// $a = $a + 20;
$a += 20;

$b = 20;
// $b = $b - 5;
$b -= 5;

$c = 4;
// $c = $c ** 4;
$c**=4;

$d = 5;
// $d = $d * 5;
$d *= 5;

$e = 6;
// $e = $e / 3;
$e /= 3;

$f = 20;
// $f = $f % 8;
$f %= 8;

echo $a;
echo '<br>';
echo $b;
echo '<br>';
echo $c;
echo '<br>';
echo $d;
echo '<br>';
echo $e;
echo '<br>';
echo $f;
echo '<br>';
