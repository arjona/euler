<?php

$n = (string) pow(2, 1000);
$l = strlen($n);

echo "$n $l\n";
$sum = 0;
for ($i = 0; $i < $l; $i++) {
    $sum += $n[$i];
}
echo $sum;


