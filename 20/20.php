<?php

$fact = gmp_strval(gmp_fact(100));
$sum = 0;
for ($a = 0; $a < strlen($fact); $a++) {
    $sum += $fact[$a];
}
echo "$sum\n";


