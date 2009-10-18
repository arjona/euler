<?php

$prime_list = array(2); // 2 is on the list fo sho!

$i = 3;
while (end($prime_list) < 2000000) {
    $ip = is_prime($i, $prime_list);
    $i = $i + 2; // don't bother checking even numbers, 2 is the only even prime
}

array_pop($prime_list); // ugly kludge, we got one more prime than we need
$p = array_sum($prime_list);
echo "$p\n";


// we check whether the number is prime.
// if it is, add it to the prime list.
// we check against that list to make checking big primes easier
function is_prime($num, &$pl) {
    $r = floor(sqrt($num));
    foreach($pl as $p) {
        if ($p > $r) break;
        if (fmod($num, $p) == 0) return false;
    }
    $pl[] = $num;
    return true;
}

