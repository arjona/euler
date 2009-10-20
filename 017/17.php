<?php

$w = "";
for ($i = 1; $i <= 1000; $i++) {
    $w = $w . number_words($i);
}
$w = preg_replace('/\s+/', '', $w);
$count = strlen($w);
echo "$count\n";

function number_words($num) {
    $digits = array( '',
        'one', 'two', 'three',
        'four', 'five', 'six',
        'seven', 'eight', 'nine'
    );

    $teens = array('ten',
        'eleven', 'twelve', 'thirteen',
        'fourteen', 'fifteen', 'sixteen',
        'seventeen', 'eighteen', 'nineteen'
    );

    $dec = array('0', '1',
        'twenty', 'thirty', 'forty',
        'fifty', 'sixty', 'seventy',
        'eighty', 'ninety'
    );

    $num = (string) $num;

    if ($num > 0 && $num < 10) {
        return $digits[$num];
    }

    if ($num >= 10 && $num < 20) {
        return $teens[$num - 10];
    }


    if ($num >= 20 && $num < 100) {
        return $dec[$num[0]] . ' ' . number_words($num[1]);
    }

    if ($num >= 100 && $num < 1000 && ($num % 100 == 0)) {
        return number_words($num[0]) . ' hundred';
    }

    if ($num > 100 && $num < 1000) {
        return number_words($num[0]) . ' hundred and ' . number_words($num - ($num[0] * 100));
    }

    if ($num == 1000) return number_words($num[0]) . ' thousand';
}

