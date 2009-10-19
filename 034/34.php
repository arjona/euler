<?php

$totsum = 0;

// the maximum for a digit is 9! = 362880
// the maximum total for a 7 digit number is 2,540,160
// the maximum total for a 8 digit number is 2,903,040
// our ceiling will have to be 7 digits and no more than 2.9 million

for ($num = 10; $num < 2903040; $num++) {
    $num = (string) $num;
    $sum = 0;
    for ($i = 0; $i < strlen((string) $num); $i++) {
        $sum = gmp_add(gmp_fact($num[$i]), $sum);
    }
    $sum = gmp_strval($sum);
    if ($sum == $num) {
        $totsum += $sum;
        echo "$sum\n";
    }
}

echo "total: $totsum\n";
