<?php
echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte" . "<br>";
echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2) . " Terabyte" . "<br>";

echo "Size In Megabyte Is " . round(filesize("D:\MV\(G)I-DLE\Allergy.mp4") / 1024 / 1024) . "<br>";
echo "Size In Kilobyte Is " . round(filesize("D:\MV\(G)I-DLE\Allergy.mp4") / 1024) . "<br>";

mkdir("Programming/PHP",0711,true);
rmdir("Programming/PHP");
rmdir("Programming");