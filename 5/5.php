<?php

$t = array();
for ($i = 2; $i <= 20; $i++) {
    $pfs = prime_factors($i);

    foreach ($pfs as $pf => $pfpow) {
        if ($t[$pf] < $pfpow) {
            $t[$pf] = $pfpow;
        }
    }
}
print_r( $t);

// return an array where the key is the prime factor and the value the power
function prime_factors($num) {
    $results = array();
    for ($f = 2; $f <= $num; $f++) {
        $exp = 1;
        while (fmod($num, $f) == 0) {
            $num = $num / $f;
            $results["$f"] = $exp++;
        }
    }
    return $results;
}

