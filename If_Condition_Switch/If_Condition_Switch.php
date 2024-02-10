<?php
$a = 100;
$b = 200;
$c = 100;

if ($b > $a) {
    echo "Yes" . "<br>";
}

if ($a === $c) {
    echo "Yes" . "<br>";
}

if ($a + $c === $b) {
    echo "Yes" . "<br>";
}

/*
Check That:
Variable "b" Larger Than Variable "a"
Variable "a" Identical To Variable "c"
Variable "a" Plus Variable "c" Identical To Variable "b"
"Yes"

 */

// Test Case 1
$a = 100;
$b = 200;
$c = 300;

if ($a > $b) {
    echo "A Is Larger Than B" . "<br>";
} elseif ($a > $c) {
    echo "A Is Larger Than C" . "<br>";
} else {
    echo "A Is Not Larger Than B Or C" . "<br>";
}

// A Is Not Larger Than B Or C

// Test Case 2
$a = 200;
$b = 100;
$c = 300;

if ($a > $b) {
    echo "A Is Larger Than B" . "<br>";
} elseif ($a > $c) {
    echo "A Is Larger Than C" . "<br>";
} else {
    echo "A Is Not Larger Than B Or C" . "<br>";
}

// A Is Larger Than B

// Test Case 3
$a = 200;
$b = 200;
$c = 100;

if ($a > $b) {
    echo "A Is Larger Than B" . "<br>";
} elseif ($a > $c) {
    echo "A Is Larger Than C" . "<br>";
} else {
    echo "A Is Not Larger Than B Or C" . "<br>";
}

// A Is Larger Than c

$a = 30;
$b = 20;
$c = 10;

// if ($a + $b === $c) {

//     echo "A + B = C";

// } elseif ($a + $c === $b) {

//     echo "A + C = B";

// } elseif ($b + $c === $a) {

//     echo "B + C = A";

// } else {

//     echo "The End";

// }

echo ($a + $b === $c) ? "A + B = C" : (($a + $c === $b) ? "A + C = B" : (($b + $c === $a) ? "B + C = A" : "The End")) . "<br>";

// Output
// "B + C = A"

$name = "Osama";
$age = 40;
$country = "Egypt";

// if ($age > 18) {
//   echo "The Age Is Good To Go<br>";
//   if (gettype($name) === "string") {
//     echo "The Name Is Good To Go<br>";
//     if ($country === "Egypt") {
//       echo "The Country Is Good To Go<br>";
//     }
//   }
// }

if ($age > 18 && gettype($name) === "string" && $country === "Egypt") {
    echo "The Age Is Good To Go<br>";
    echo "The Name Is Good To Go<br>";
    echo "The Country Is Good To Go<br>";
}

// Needed Output
// "The Age Is Good To Go"
// "The Name Is Good To Go"
// "The Country Is Good To Go"

$genre = "Hack And Slash";

// if ($genre === "RPG") {

//   echo "I Recommend Ys Games";

// } elseif ($genre === "Hack And Slash") {

//   echo "I Recommend Castlevania Games";

// } elseif ($genre === "FPS") {

//   echo "I Recommend Uncharted Games";

// } elseif ($genre === "Platform") {

//   echo "I Recommend Megaman Games";

// } elseif ($genre === "Puzzle") {

//   echo "I Recommend Megaman Games";

// } else {

//   echo "I Recommend Shadow Of Mordor And Shadow Of War";

// }

switch ($genre) {
    case "RPG":
        echo "I Recommend Ys Games" . "<br>";
        break;
    case "Hack And Slash":
        echo "I Recommend Castlevania Games" . "<br>";
        break;
    case "FPS":
        echo "I Recommend Uncharted Games" . "<br>";
        break;
    case "Platform":
        echo "I Recommend Megaman Games" . "<br>";
        break;
    case "Puzzle":
        echo "I Recommend Megaman Games" . "<br>";
        break;
    default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War" . "<br>";
        break;
}

$num_one = 23;
$num_two = 5;
$op = "+";

echo match ($op) {
    "+" => $num_one + $num_two,
    "-" => $num_one - $num_two,
    "/" => (int) ($num_one / $num_two) . "<br>" . $num_one % $num_two,
    "*" => $num_one * $num_two,
    default => "Unknown Operation",
};
echo "<br>";

// Needed Output
// "I Recommend Castlevania Games"

$day = "Sat";

// switch ($day) {
//     case "Sat":
//     case "Sun":
//     case "Mon":
//         echo "We Are Open All The Day";
//         break;
//     case "Tue":
//     case "Wed":
//         echo "We Are Open From 08:12";
//         break;
//     case "Thu":
//     case "Fri":
//         echo "We Are Closed";
//         break;
//     default:
//         echo "Unknown Day";
// }

if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
    echo "We Are Open All The Day" . "<br>";
} elseif ($day == "Tue" || $day == "Wed") {
    echo "We Are Open From 08:12" . "<br>";
} elseif ($day == "Thu" || $day == "Fri") {
    echo "We Are Closed" . "<br>";
} else {
    echo "Unknown Day" . "<br>";
}
