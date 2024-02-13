<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here

echo substr_replace(substr_replace($str, $let_one, $num_one), $let_two, $num_two, ($num_one + $num_two)) . "<br>";
$str = "Orezle";

// Elzero
echo ucfirst(strrev(lcfirst($str))) . "<br>";

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo chunk_split(str_repeat(strtolower($str), $num), 3, $char) . "<br>";
// aaa_aaa_aaa_

$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>") . "<br>";
// <b>Elzero</b>

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

// 1
echo substr_count($str, strtoupper($e)) . "<br>";
echo substr_count($str, strtolower($o), $four, -$four). "<br>";
// 2
echo substr_count($str, $e) . "<br>";
echo substr_count($str, strtolower($o), $four + $four) . "<br>";

$chars = ["E", "l", "z", "e", "r", "o"];

// Output
echo implode($chars) . "<br>";

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
$result = "";
foreach ($chars as $char) {
    if (is_string($char)) {
        $result .= strtolower($char);
    }
}

echo ucfirst($result);