<?php
for ($i = 0; $i < 5; $i++) {
    echo rand(11, 19) . "<br>";
}

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

shuffle($friends);
foreach ($friends as $friend) {
    echo $friend . "<br>";
}

$num1 = 11.5; // 11
echo round($num1, 0, PHP_ROUND_HALF_DOWN) . "<br>";
$num2 = 9.4898; // 9.5
echo round($num2, 1) . "<br>";
$num3 = -7.5; // -7
echo round($num3, 0, PHP_ROUND_HALF_DOWN) . "<br>";

$my_filter = [];
foreach (filter_list() as $key => $value) {
    $key = filter_id($value);
    $my_filter[$key] = $value;
}

echo "<pre>";
print_r($my_filter);
echo "</pre>";

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>" : "Not A Valid URL" . "<br>";
echo filter_var($url2, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>" : "Not A Valid URL" . "<br>";
echo filter_var($url3, FILTER_VALIDATE_URL) ? "A Valid URL" . "<br>" : "Not A Valid URL" . "<br>";
echo filter_var($url4, FILTER_VALIDATE_URL) ? "A Valid URL" ."<br>": "Not A Valid URL" . "<br>";

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL) . "<br>";
echo filter_var($url2, FILTER_SANITIZE_URL) . "<br>";
echo filter_var($url3, FILTER_SANITIZE_URL) . "<br>";
echo filter_var($url4, FILTER_SANITIZE_URL) . "<br>";
