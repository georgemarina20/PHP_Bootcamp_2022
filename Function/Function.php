<?php
// Write Function Content Here

function greeting($name, $gender = "private")
{
    echo match ($gender) {
        "Male" => "Hello Mr $name <br>",
        "Female" => "Hello Miss $name <br>",
        default => "Hello $name",
    };
}

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh
echo "<br>";
echo "<br>";
// Write Function Content Here

function get_arguments(...$args) {
    // Join the array elements into a string, separated by a space
    $result = implode(" ", $args);
  
    // Return the result string
    return $result . "<br>";
  }
  

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments("I", "Love", "PHP"); // I Love PHP
echo "<br>";

function get_arguments1(...$args) {
    $arguments = func_get_args();
    $all = "";
    foreach (func_get_args() as $arg) {
        $all .= $arg . " ";
    }
    return $all . "<br>";
}

// Needed Output
echo get_arguments1("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments1("I", "Love", "PHP"); // I Love PHP
echo "<br>";

// Write Function Content Here
function sum_all(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        if ($num === 5) {
            continue;
        }
        if ($num === 10) {
            $num = 20;
        }
        $sum += $num;
    }
    return $sum . "<br>";
}
// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40

// Write Function Content Here
function multiply(...$nums)
{
    echo "<br>";
    $multi = 1;
    foreach ($nums as $num) {
        if (is_string($num)) {
            continue;
        }
        if (is_float($num)) {
            $num = (int) $num;
        }
        $multi *= $num;
    }
    return $multi;
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000
echo "<br>";
echo "<br>";

function check_status($a, $b, $c)
{
    // Initialize the variables
    $name = "";
    $age = 0;
    $available = false;

    // Check the type of each argument and assign them accordingly
    if (gettype($a) == "string") {
        $name = $a;
    } elseif (gettype($a) == "integer") {
        $age = $a;
    } elseif (gettype($a) == "boolean") {
        $available = $a;
    }

    if (gettype($b) == "string") {
        $name = $b;
    } elseif (gettype($b) == "integer") {
        $age = $b;
    } elseif (gettype($b) == "boolean") {
        $available = $b;
    }

    if (gettype($c) == "string") {
        $name = $c;
    } elseif (gettype($c) == "integer") {
        $age = $c;
    } elseif (gettype($c) == "boolean") {
        $available = $c;
    }

    // Return the formatted string based on the availability
    if ($available) {
        return "Hello $name, Your Age Is $age, You Are Available For Hire <br>";
    } else {
        return "Hello $name, Your Age Is $age, You Are Not Available For Hire <br>";
    }
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
echo "<br>";

// Write Function Content Here

function calculate($num1, $num2, $op = "a")
{
    return match ($op) {
        "a", "add" => $num1 + $num2,
        "s", "subtract" => $num1 - $num2,
        "m", "multiply" => $num1 * $num2,
        default => "There is an error"
    } . "<br>";
}

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
echo "<br>";

function calculate7(int $num_one, int $num_two): float
{
    return $num_one + $num_two;
}

echo calculate7(20, 10) . "<br>"; // 30
echo gettype(calculate7(20, 10)) . "<br>"; // Double
echo "<br>";

$message = "Hello";

// Write Your Code Here
function hello($name)
{
    echo "Hello $name <br>";
}
echo $message("Osama"); // Hello Osama
echo "<br>";

// Write Function Content Here
$greet = function ($name) {
    return "Greeting<br>";
};

$greet = fn($name) => "Greeting<br>";
// Needed Output
echo $greet("Osama"); // Greetings
