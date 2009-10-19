<?php

$r = 0;
// only odd numbers get to be palindromes as they end in 1 in binary
for ($d = 1; $d < 1000000; $d = $d + 2) {
    $b = decbin($d);
    $dr = strrev($d);
    $br = strrev($b);
    if ($d == $dr && $b == $br) {
        $r += $d;
        echo "$d $b $br $dr\n";
    }
}

echo "$r\n";
