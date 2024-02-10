<?php
$index = 10;
while ($index > 0) {
    echo "$index<br>";
    $index--;
}
// Needed Output
// 10
// 9
// 8
// 7
// 6
// 5
// 4
// 3
// 2
// 1
echo "<br>";

$index = 0;
while ($index <= 18) {
    $index += 2;
    echo "$index<br>";
}
echo "<br>";

for ($index = 0; $index <= 18;) {
    $index += 2;
    echo "$index<br>";
}
echo "<br>";

$index = 0;
do {
    $index += 2;
    echo "$index<br>";
} while ($index <= 18);
echo "<br>";

// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20

$num = 2;
$i = 0;
while ($num < 520) {
    // Your Code Here
    if ($num == 2) {
        $num--;
        echo $num . "<br>";
    }
    if ($i == 7) {
        break;
    }
    $num += (3 * (2 ** $i++));
    echo $num . "<br>";
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382
echo "<br>";
$start = 10;
$end = 0;
$stop = 3;

for (; $start >= $end; $start--) {
    if ($start == 10) {
        echo $start . "<br>";
    } else {
        echo 0 . $start . "<br>";
        if ($start == 3) {
            break;
        }
    }
}
// Needed Output
// 10
// 09
// 08
// 07
// 06
// 05
// 04
// 03
echo "<br>";

$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

for (; $start < 7; $start++) {
    if ($start == 0 || $start == 3 || $start == 4 || $start == 5) {
        continue;
    }
    echo $mix[$start] . "<br>";
}
// Output
// 2
// 3
// 4
echo "<br>";

$money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
foreach ($money as $name => $price) {
    echo "The Name Is $name And I Need $price Pound From Him<br>";
}
// Output
// "The Name Is Ahmed And I Need 100 Pound From Him"
// "The Name Is Sayed And I Need 150 Pound From Him"
// "The Name Is Osama And I Need 100 Pound From Him"
// "The Name Is Maher And I Need 250 Pound From Him"
echo "<br>";

$mix = [1, 2, "A", "B", "C", 3, 4];
$counter_number = 0;
$counter_letter = 0;
foreach ($mix as $val) {
    if ($val == "A" || $val == "B" || $val == "C") {
        $counter_letter++;
        continue;
    }
    echo $val . "<br>";
    $counter_number++;
}
echo "$counter_number Numbers Printed<br>";
echo "$counter_letter Letters Ignored<br>";
// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
echo "<br>";

$nums = [1, 13, 12, 20, 51, 17, 30];

foreach ($nums as $num) {
    if ($num % 2 == 0) {
        echo $num / 2 . "<br>";
    }
}
// Output
// 6
// 10
// 15
echo "<br>";

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
for (; $help_num == 3 || $help_num == 4; $help_num++) {
    echo $names[$nums[$help_num]] . "<br>";
}
// Output
// "Sayed"
// "Osama"
echo "<br>";

$help_num = 4;
$nums = [2, 4, 5, 6, 10];
foreach ($nums as $num) {
    echo "$num + $nums[$help_num] = " . $num + $nums[$help_num] . "<br>";
    $help_num--;
}

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
echo "<br>";
