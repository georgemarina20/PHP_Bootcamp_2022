<?php

/*
Function
- Advanced Examples With Parameters And Arguments
- Real Life Example
 */

function say_hello_to($one, $two)
{
    echo "Hello $one $two<br>";
}
say_hello_to("Osama", "Ahmed");

function deep_freezer($item)
{
    // if ($item === "Water") {
    //     echo "Make Ice <br>";
    // } elseif ($item === "Coca Cola") {
    //     echo "Make It Cold <br>";
    // } elseif ($item === "Fruits") {
    //     echo "Make It Fresh <br>";
    // } else {
    //     echo "Unknown Item";
    // }
    // switch ($item) {
    //     case "Water":
    //         echo "Make Ice <br>";
    //         break;
    //     case "Coca Cola":
    //         echo "Make It Cold <br>";
    //         break;
    //     case "Fruits":
    //         echo "Make It Fresh <br>";
    //         break;
    //     default:
    //         echo "Unknown Item";
    //         break;
    // }
    echo match ($item) {
        "Water" => "Make Ice <br>",
        "Coca Cola" => "Make It Cold <br>",
        "Fruits" => "Make It Fresh <br>",
        default => "Unknown Item",
    };
}

deep_freezer("Water");
deep_freezer("Coca Cola");
deep_freezer("Fruits");
deep_freezer("Tv Remote");
