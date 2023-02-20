<?php

function concatenateStrings($str1, $str2) {
    $length1 = strlen($str1);
    $length2 = strlen($str2);
    if ($length1 < $length2) {
        list($str1, $str2) = array($str2, $str1);
        list($length1, $length2) = array($length2, $length1);
    }
    $overlap = $length2;
    while ($overlap > 0 && substr($str1, -$overlap) !== substr($str2, 0, $overlap)) {
        $overlap--;
    }
    return substr($str1, 0, $length1 - $overlap) . $str2;
}