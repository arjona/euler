<?php

for ($c = 500; $c > 333; $c--) {
    for ($b = $c - 1; $b > 333; $b--) {
        $t = $c + $b;
        for ($a = (1000 - $t); $a <= (1000 - $t); $a++) {
            if (pow($a, 2) + pow($b, 2) == pow($c, 2)) {
                $r = $a * $b * $c;
                echo "$a $b $c $r\n";
            }
        }
    }
}
