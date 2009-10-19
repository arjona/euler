<?php

// the number of divisors of an integer d(n) can be obtained
// doing a prime factorization.
// just add 1 to every factor's exponent and multiply them
// Ex. 36 = (2^2) * (3^2) = 3 * 3 = 9
//     28 = (2^2) * (7^1) =  3 * 2 = 6


$t = 1;
$div = 1;
while ($div < 500) {
    $num = $num + $t; // triangle number
    $pf = prime_factors($num);
    $div = array_reduce($pf, 'mulplus1', 1); // apply mulplus1() to every element of the array
    echo "$t $num $div\n";
    $t++;
}


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

function mulplus1($v, $w) {
    $v *= ($w + 1);
    return $v;
}
