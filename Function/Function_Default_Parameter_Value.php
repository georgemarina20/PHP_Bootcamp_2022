<?php

/*
Function
- Default Parameter Value
--- Using
--- Test Data
--- Skip Arguments
 */

function get_data($country = "Private Country", $name = "Private", $age = "Private", $address = "Private Address")
{
    // if ($address === "") {
    //   $address = "Private Address";
    // }
    $lineone = "Your Country Is $country And Your Name Is $name <br>";
    $linetwo = "Your Age Is $age And You Live In $address";
    return $lineone . $linetwo;
}

echo get_data(address: "Cairo");
