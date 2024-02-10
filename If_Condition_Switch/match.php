<?php
$day = "1";

echo match ($day) {
    "Sat" => "Hello Today Is $day We Are Open From 10:16",
    "Sun" => "Hello Today Is $day We Are Open From 12:18",
    "Mon", "Thu" => "Hello Today Is $day We Are Open From 08:12",
    1, "1" => "match 1 is active",
/* if ($day === 1){
echo "case 1 is active";
}  */
    default => "Unknown Day",
};
