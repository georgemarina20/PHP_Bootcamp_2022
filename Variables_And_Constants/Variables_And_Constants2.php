<?php

$name = "elzero";
$$name = "Web";

echo $$name;
echo '<br>';
echo $elzero;
echo '<br>';
echo ${$name};
echo '<br>';
echo "{$elzero}";
echo '<br>';
echo "{$$name}";
echo '<br>';
echo '<br>';

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100
echo '<br>';
echo '<br>';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

echo $_SERVER["DOCUMENT_ROOT"];
echo '<br>';
echo $_SERVER["SERVER_NAME"];
echo '<br>';
echo $_SERVER["SystemRoot"];
echo '<br>';
echo $_SERVER["OPENSSL_CONF"];
echo '<br>';
echo '<br>';

/*
10 Words Here
__halt_compiler()    abstract    and    array()    as
break    callable    case    catch    class
 */

echo __LINE__;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __DIR__;
echo '<br>';
