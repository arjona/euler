<?php

for ($i = 1; $i < 20; $i++) {
    $w = number_words($i);
    echo "$w\n";
}


function number_words($num) {
    $digits = array( '0',
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

    if ($num > 0 && $num < 10) {
        return $digits[$num];
    }

    if ($num >= 10 && $num < 20) {
        return $teens[$num - 10];
    }
/*
    $num = (string) $num;
    $num = strrev($num);

    $words = array();
    for ($d = 0; $d < strlen($num); $d++) {
        $words[] = $digits[$num[$d]];
    }
    */
}

