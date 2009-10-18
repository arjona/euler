<?php

$pal = 0;
for ($a = 999; $a > 99; $a--)
{
    for ($b = 999; $b > 99; $b--) {
        $num = $a * $b;
        if (is_palindrome($num) && $num > $pal) {
            $pal = $num;
        }
    }
}

echo "$pal\n";


function is_palindrome($s)
{
    $rev = strrev($s);
    if (strcmp($rev, $s) == 0) {
        return true;
    } else {
        return false;
    }
}
