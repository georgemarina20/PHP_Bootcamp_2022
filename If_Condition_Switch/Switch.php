<?php

/*
Control Structure
- Switch

Syntax
switch (expression) {
Case 1:
// Code Block 1
break;
Case 2:
// Code Block 2
break;
Case 3:
// Code Block 3
break;
Default:
// Default Code Block
}

 */

$day = "1";

switch ($day) {

    case "Sat":
        echo "Hello Today Is $day We Are Open From 10:16";
        break;

    case "Sun":
        echo "Hello Today Is $day We Are Open From 12:18";
        break;

    case "Mon":
    case "Thu":
        echo "Hello Today Is $day We Are Open From 08:12";
        break;

    case 1:
        echo "case 1 is active";
        break;
    /* if ($day == 1){
    echo "case 1 is active";
    }  */

    default:
        echo "Unknown Day";
        break;
}
