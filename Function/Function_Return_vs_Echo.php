<?php

/*
Function
- Optional Return &#038; Null
- End After Return
 */

$prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];

function get_number($numone, $numtwo)
{
    return $numone + $numtwo;
    echo "Will Not Echo Anything";
}

// get_number(2, 1); // 3
// echo $prizes[3]; // "Apple TV"
// $prize_number = get_number(2, 1);
// var_dump($prize_number);
// echo $prizes[];

// $prize_number = get_number(2, 1);
// var_dump($prize_number);

echo $prizes[get_number(2, 1)];
