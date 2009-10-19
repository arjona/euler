<?php

$size = 1001;
$sum = 0;

while ($size > 1) {
    $inc = $size - 1; // how much to substract for the next corner
    $tr = pow($size, 2); // top right is always a square of the size

    // calculate the corners
    $tl = $tr - $inc;
    $bl = $tl - $inc;
    $br = $bl - $inc;
    $sum += $tr + $tl + $bl + $br; // add them up
    $size -= 2; // the spiral can only be odd in size as it must hold a 1 in the middle
}
$sum++; //we add the 1 in the middle

echo "$sum\n";
