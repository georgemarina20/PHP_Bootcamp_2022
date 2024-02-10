<?php
$a = 2;
$b = 4;
$c = 3;
/*
or first true just read it
first false read second...

and first false  just read it
first true read second...

xor must read them all

"||" Has A Greater Precedence Than "or"
-   "&&" Has A Greater Precedence Than "and"
 */
if ($a == $c or $a == $b++ and $b == $c++) {
    echo $c;
}
echo $b++ . $c;
