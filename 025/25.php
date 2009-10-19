<?php

$fibp = 1;
$fibc = 1;

$fibn = 2; // already got 2: $fibp and $fibc
$fib = 0;
while (strlen(gmp_strval($fib)) < 1000) {
    $fib = gmp_add($fibp, $fibc);
    $fibp = $fibc;
    $fibc = $fib;
    $fibn++;
}

$fib = gmp_strval($fib);
echo "$fib $fibn\n";
