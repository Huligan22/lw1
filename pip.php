<?php
function babochka($number) {
    $str = (string)$number;
    $reversed = strrev($str);
    return $str === $reversed;
}

float $number = 12321;

if (babochka($number)) {
    echo "$number — приснилась бабочка.";
} else {
    echo "$number — не приснилась бабочка.";
}
