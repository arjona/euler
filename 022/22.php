<?php

$file = file_get_contents('names.txt'); 
$file = str_replace('"', '', $file); 
$names = explode(',', $file); 
sort($names);


$totscore = 0;
// string used to look up a character's position in the alphabet
$abc = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 

foreach ($names as $rank => $name) {
    $sum = 0;
    for ($i = 0; $i < strlen($name); $i++) {
        $pos = strpos($abc, $name[$i]) + 1; // positions are 0-based
        $sum += $pos;
    }
    $score = $sum * ($rank + 1); // so are the rank array keys
    $totscore += $score;
}

echo "$totscore\n";
