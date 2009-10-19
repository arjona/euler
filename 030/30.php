<?php

$totsum = 0;

// the maximum for a digit is 9^5 = 649539
// the maximum total for a 5 digit number is 295245
// the maximum total for a 6 digit number is 354294
// the maximum total for a 7 digit number is 413343
// 5 digits is too few to hold the maximum, 7 is too much.
// as 7 digits didn't get to 500k we can safely assume that as our ceiling

for ($num = 2; $num < 500000; $num++) {
    $num = (string) $num;
    $sum = 0;
    for ($i = 0; $i < strlen((string) $num); $i++) {
        $sum += pow($num[$i], 5);
    }

    if ($sum == $num) {
        $totsum += $num;
        echo "$sum\n";
    }
}

echo "total: $totsum\n";
