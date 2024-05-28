<?php

function getRandomFloat($min, $max, $decimals = 2) {
    $scale = pow(10, $decimals);
    return round($min + mt_rand() / mt_getrandmax() * ($max - $min), $decimals);
}
