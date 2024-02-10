<?php
// Replace ? With Arithmetic Operators
echo 10 * 20 * 15 * 3 * 190 * 10 % 400; // 0
echo '<br>';
echo '<br>';

$a = "10";

// Needed Ouput
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"

echo gettype($a + 0);
echo '<br>';
echo gettype(+$a);
echo '<br>';

echo gettype((int) $a);
echo '<br>';

// For The People Who Love Searching
// 10
// "integer"
// 10
// "integer"
// 10
// "integer"
// if don't require value
echo gettype(intval($a));
echo '<br>';
settype($a, "int");
echo gettype($a);
echo '<br>';
echo gettype(-$a);
echo '<br>';
echo '<br>';

$a = 10;
$b = 20;

// Needed Output
echo $a <=> $b;
echo '<br>';
echo '<br>';

$a = 10;
$b = 20;
$c = 15;

var_dump($a < $b); // True
var_dump($c > $a); // True
var_dump($a <= $b); // True
var_dump($a != $b); // True
var_dump($a < $c); // True
var_dump($a != $c); // True
var_dump(gettype($a) == gettype($b)); // True
var_dump(gettype($a) === gettype($b)); // True
var_dump(gettype((float) $a) != gettype($b)); // True
echo '<br>';
echo '<br>';

$points = 10;

// Write Your Code Here
$points += 3;

echo $points; // 13
echo '<br>';

// Write Your Code Here
$points -= 5;

echo $points; // 8;
echo '<br>';
echo '<br>';

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = "{$a} {$b} {$c}";

// Method Three
$d = $a . " " . $b . " " . $c;

// Method Four
$d = <<< "heredoc"
$a $b $c
heredoc;

echo $d; // Elzero Web School
echo '<br>';
echo '<br>';

$a = 10;
$b = 20;

echo $a % ($b - $a + $b) * $a * $a * $a; // 10000
echo '<br>';
echo '<br>';

// Code 1
$var1 = @$var2 or die("Custom Error1");

// Code 2
$f = @file("Not_A_File") or die("Custom Error2");

// Code 3
(@include "Not_A_File") or die("Custom Error");
