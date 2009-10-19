<?php

$count = 0;
for ($y = 1901; $y <= 2000; $y++) {
    for ($m = 1; $m <= 12; $m++) {
        $d = mktime(0, 0, 0, $m, 1, $y);
        $r = date("D", $d);
        if ($r == 'Sun') $count++;
    }
}

echo "$count\n";
