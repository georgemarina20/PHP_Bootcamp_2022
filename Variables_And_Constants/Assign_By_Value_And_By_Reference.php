<?php

/*
Assign Variable By Reference
- By Default, Variables Are Always Assigned By Value
- Assigned By Reference Make Variable Alias Or Point To Another

Search
- References Are Not Pointers
 */

$a = "Osama";
$b = &/*038;*/$a;
$b = "Elzero";
$a = "School";

echo $a;
echo '<br>';
echo $b;
