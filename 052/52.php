<?php

// I just set whatever big number as limit
// the function doesn't care if digits are repeated
// it behaves mostly O(n);
for ($i = 1; $i < 200000; $i++) {
    if ($r = same_digits($i)) {
        echo "$r\n";
    }
}

// BEHOLD THE IF PYRAMID OF DOOM!
function same_digits($num) {
    $n = (string) $num;
    $n = array_unique(str_split($n));

    $n2 = (string) $num * 2;
    $n2 = array_unique(str_split($n2));

    sort($n);
    sort($n2);
    if ($n == $n2) {
        $n3 = (string) $num * 3;
        $n3 = array_unique(str_split($n3));
        sort($n3);
        if ($n == $n3) {
            $n4 = (string) $num * 4;
            $n4 = array_unique(str_split($n4));
            sort($n4);
            if ($n == $n4) {
                $n5 = (string) $num * 5;
                $n5 = array_unique(str_split($n5));
                sort($n5);
                if ($n == $n5) {
                    $n6 = (string) $num * 6;
                    $n6 = array_unique(str_split($n6));
                    sort($n6);
                    if ($n == $n6) {
                        return $num;
                    }
                }
            }
        }
    }
    return false;
}
