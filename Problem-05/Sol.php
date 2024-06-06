<?php

// canBeStringToInt() is inside hooks.php file
include('./hooks.php');


function sumOfDigits(int $num): int {
    $numegative = false;

    if ($num < 0) {
        $numegative = true;
        $num = -$num;
    }
    
    $sum = 0;
    while ($num > 0) {
        $sum = $sum + ($num % 10);
        $num =  floor($num / 10);
    }

    if ($numegative) $sum = -$sum;

    return $sum;
}

function mainFunc(): void {
    $num = trim(readline());

    // if non numeric or floating type numbers given
    if (!is_numeric($num) || !canBeStringToInt($num)) $num = null;

    if ($num === null) {
        echo "Invalid number given!\n";
        return;
    }

    echo sumOfDigits($num) . "\n";
}

mainFunc();