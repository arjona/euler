<?php

$max = 0;
$max_start = 0;

// no need to test even numbers as they tend to plummet quickly
for ($i = 3; $i < 1000000; $i = $i +2) {
    $n = $i;
    $seq = 1; 
    while ($n != 1) {
        if (fmod($n, 2) == 0) {
            $n = $n / 2;
        } else {
            $n = $n * 3 + 1;
        }
        $seq++;
    }
    if ($seq > $max) {
        $max = $seq;
        $max_start = $i;
    }
}

echo "$max_start $max\n";
