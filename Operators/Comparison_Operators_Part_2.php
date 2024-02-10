<?php

/*
Operators
- Used To Perform Operations On Values.

Comparison Operators
- Used To Compare Two Values

- Part 2
- >     => Larger Than
- >=    => Larger Than Or Equal
- <     => Smaller Than
- <=    => Smaller Than Or Equal
- <=>   => Spaceship [Less Than, Equal Or Greater]

Search
- How Does PHP Compare Strings With Comparison Operators
 */

var_dump(100 > 50);
echo '<br>';
var_dump(100 > 100);
echo '<br>';
var_dump(100 >= 100);
echo '<br>';
var_dump(100 >= 110);
echo '<br>';
var_dump(100 < 50);
echo '<br>';
var_dump(100 <= 50);
echo '<br>';
var_dump(100 <=> 200); // -1
echo '<br>';
var_dump(100 <=> 100); // 0
echo '<br>';
var_dump(100 <=> 50); // 1
echo '<br>';

$str1 = "hello";
$str2 = "hello";

if ($str1 == $str2) {
    echo "Equal";
    echo '<br>';
}

if ($str1 === $str2) {
    echo "Identical";
    echo '<br>';
}

if ($str1 > $str2) {
    echo "Larger Than";
    echo '<br>';
}

if ($str1 >= $str2) {
    echo "Larger Than or Equal";
    echo '<br>';
}

if ($str1 < $str2) {
    echo "Smaller Than";
    echo '<br>';
}

if ($str1 <= $str2) {
    echo "Smaller Than or Equal";
    echo '<br>';
}
