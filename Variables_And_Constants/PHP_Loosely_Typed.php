<?php

declare (strict_types = 1);
$php = 1;
$php = 'a';
echo $php . '<br>';
$x = &$php;
$x = 1;
echo $php . '<br>';
$php = 1.2;
echo $x . '<br>';
