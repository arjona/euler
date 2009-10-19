<?php

$p = 0;
for ($i = 1; $i <= 1000; $i++) {
    $p = gmp_add($p, gmp_pow($i, $i));
}

$p = gmp_strval($p);
$p = substr($p, strlen($p) - 10, 10);
echo "$p\n";
