<?php
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed",
];

echo "<pre>";
print_r(array_chunk($friends, 2, true));
echo "</pre>";

$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

echo "<pre>";
print_r(array_change_key_case(array_combine($codes, $means)));
echo "</pre>";

$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS",
];

echo "<pre>";
print_r(array_change_key_case(array_reverse(array_flip($friends))));
echo "</pre>";

$nums = [10, 20, 30];

echo array_sum($nums) . "<br>";
echo array_reduce($nums, fn($c, $i) => ($c + $i)) . "<br>";

$nums = [5, 10, 20, 5, 30, 40];

echo "<pre>";
echo array_reduce(array_filter($nums, fn($num) => $num != 5), fn($c, $i) => ($c + $i)) . "<br>";
echo "</pre>";

$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

echo "<pre>";
print_r(array_pad($chars, count(array_merge($chars, $chars)), str_split($char)[$zero]));
echo "</pre>";

$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "<br>"; // "Sayed"

end($names);

echo current($names) . "<br>"; // "Ali"

reset($names);

echo current($names) . "<br>"; // "Osama"

end($names);
prev($names);

echo current($names) . "<br>"; // "Mahmoud"

$chars = ["A", "B", "C"];
$chars[] = "D";
// array_push($chars, "D");
// array_splice($chars, 3, 0, "D");
// print_r(array_merge($chars, ["D"]));
echo "<pre>";
print_r($chars);
echo "</pre>";

$nums = [1, 2, 3, 4, 5, 6];

echo "<pre>";
print_r(array_slice($nums, -5, -2));
echo "</pre>";

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
echo "<pre>";
array_unshift($nums, current($mix), next($mix), next($mix));
end($mix);
prev($mix);
array_push($nums, prev($mix),next($mix), next($mix));
print_r($nums);
echo "</pre>";

$arr = ["A", "B", "C", "D", "E"];
function my_count($arr) {
    $count = 0;
    foreach ($arr as $val) {
        $count++;    
    }
    return $count;
}

echo my_count($arr) . "<br>";

$nums = [11, 2, 10, 7, 20, 50];

$sum = 0;
foreach ($nums as $num) {
    $sum += $num;
}
echo $sum . "<br>";

$nums = [10, 100, -20, 50, 30];

$res = $nums[0];

foreach ($nums as $num) {
    if ($res < $num) {
        $res = $num;
    }
}
echo $res . "<br>";

$nums = [10, 100, -20, 50, 30];

$res = $nums[0];

foreach ($nums as $num) {
    if ($res > $num) {
        $res = $num;
    }
}
echo $res . "<br>";

$chars = ["o", "r", "e", "z", "l", "E"];

for ($i = my_count($chars) - 1;$i >= 0;$i--) {
    echo $chars[$i];
}
echo "<br>";

// $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
// $odd = [];
// sort($mix);
// foreach ($mix as $val) {
//     if (is_int($val) && $val%2 != 0 ) {
//         $odd[] = $val;
//     }
// }
// echo "<pre>";
// print_r($odd);
// echo "</pre>";

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$numbers = array_filter($mix, 'is_numeric');
$oddNumbers = array_filter($numbers, fn($num) => $num % 2 !== 0 );
sort($oddNumbers);

echo "<pre>";
print_r($oddNumbers);
echo "</pre>";


function customShuffle($array) {
    $shuffledArray = [];
    $keys = array_keys($array);
    shuffle($keys);
    foreach ($keys as $key) {
        $shuffledArray[$key] = $array[$key];
    }
    return $shuffledArray;
}

$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r(customShuffle($nums));
echo "</pre>";
echo "<pre>";
print_r(customShuffle($nums));
echo "</pre>";
$title = "E&z\$r0 W\$b Sch00&";

// Output
echo str_replace(["&","0", "$"], ["l", "o", "e"], $title, $rcount) . "<br>";
echo $rcount . "<br>";