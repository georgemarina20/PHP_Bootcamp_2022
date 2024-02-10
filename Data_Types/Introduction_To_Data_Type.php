<?php

/*
============================================
= Data Types
= ----------
= bool  => Boolean
= int   => Integer
= float => Floating Point Number | double
= string
= array
= Other Types
= gettype()
============================================
 */

echo gettype(true);
echo '<br>';
echo gettype(false);
echo '<br>';
echo gettype(true);
echo '<br>';
echo gettype(100);
echo '<br>';
echo gettype(-200);
echo '<br>';
echo gettype(0);
echo '<br>';
echo gettype(70.30);
echo '<br>';
echo gettype(-60.30);
echo '<br>';
echo gettype('0');
echo '<br>';
echo gettype('e');
echo '<br>';
echo gettype("e");
echo '<br>';
echo gettype('Elzero');
echo '<br>';
echo gettype("Elzero");
echo '<br>';
echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
echo '<br>';
echo gettype(array("Egypt", "Saudi Arabia"));
echo '<br>';
echo gettype(["Egypt", "Saudi Arabia"]);
echo '<br>';
echo gettype(fopen('test.txt', 'r'));
echo '<br>';
var_dump(fopen('test.txt', 'r'));
echo '<br>';
echo gettype(null);
echo '<br>';
var_dump(null);
echo '<br>';
