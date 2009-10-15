<?php

// this is bigger than what fits on an int so we can't use %
$num = 600851475143;

for ($f = 2; $f <= $num; $f++) {
    while (fmod($num, $f) == 0) {
        $num = $num / $f;
        echo "$f: $num\n";
    }
}
