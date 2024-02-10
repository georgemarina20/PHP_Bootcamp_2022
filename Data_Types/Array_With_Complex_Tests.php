<?php

/*
============================================
= Data Types
= ----------
= Array
= -------------------
= Array With Key
= Array Without Keys
= Array With One Key
= Array Value Override
= ------------------
= print_r()
============================================
 */

echo '<pre>';
print_r([
    0 => "Sameh",
    "A" => "Ahmed",
    "B" => "Basem",
    "Mahmoud",
    true => "Sayed",
    "1" => "Osama",
    "Gamal",
    9 => "Amera",
    "Eman",
    "Mohamed",
    false => "Asmaa",
    8 => "Haytham",
    "Samer",
    3 => "ge",
    "wa",
    "Names" => [
        "Osama",
        "Ahmed",
        "Sayed" => [
            "1",
            "2",
            "3",
        ],
    ],
]);
echo '</pre>';
$ar = [1, 2];
print_r($ar);
echo '<br>';
unset($ar);
print_r($ar);
$ar = [3, 4];
unset($ar[1]);
$ar[] = 2;
print_r($ar);
