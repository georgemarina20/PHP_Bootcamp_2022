<?php

/*
Function
- Passing Arguments by Reference
--- By Default, Function Arguments Are Passed By Value
--- If The Value Of The Argument Inside The Function Changed It Will Not Change Outside
--- To Change It Outside Pass The Argument By Reference

- Return Type Declarations

Search
- PHP Strict Mode
 */

// declare(strict_types = 1);

function add_five(&$number)
{
    $number += 5;
    return $number;
}

$n = 15;

echo add_five($n) . "<br>"; // 20

echo $n; // 20

echo '<br>';

function calculate(int $n1, int $n2): int
{
    return $n1 + $n2;
}

echo calculate(10.5, 9.5);

echo '<br>';

echo gettype(calculate(10.5, 9.5)); // Integer
