<?php
// yay more gmp_* fugliness

// All hexagonal numbers are also triangular numbers
for ($n = 142; $n <= 100000; $n++) {
    $h = gmp_sub(gmp_mul(2, gmp_pow($n, 2)), $n);
    $h = gmp_strval($h);
    $p = is_pentagonal($h);
    if ($p) {
        echo "$h $p\n--\n";
    }
}

// to test we use the formula:
// n = (sqr(24 * num + 1) + 1) / 6
function is_pentagonal($num) {
    // we do a sqr with remainder
    list($sr, $rem) = gmp_sqrtrem(gmp_add(gmp_mul(24, $num), 1));
    
    // if it's not an exact root don't bother with the rest
    if (gmp_strval($rem) == '0') {
        $d = gmp_add($sr, 1); 
        $m = gmp_strval(gmp_mod($d, 6));
        if ($m == '0') return true;
    }
    return false;
}
