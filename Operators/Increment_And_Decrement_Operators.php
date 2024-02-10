<?php

/*
Operators
- Used To Perform Operations On Values.

Incrementing &#038; Decrementing Operators
- Increase And Decrease Values
 */

$likes = 0;
$likes++;
++$likes;
$likes--;
--$likes;

echo $likes; // 0
echo '<br>';

$a = 0;

echo $a++; // 0
echo '<br>';
echo $a; // 1
echo '<br>';

echo $a--; // 1
echo '<br>';
echo $a; // 0
echo '<br>';

$b = 0;

echo ++$b; // 1
echo '<br>';
echo $b; // 1
echo '<br>';

echo --$b; // 0
echo '<br>';
echo $b; // 0
