<?php

function sumOfDigits(int $n): int {
    $negative = false;

    if ($n < 0) {
        $negative = true;
        $n = -$n;
    }
    
    $sum = 0;
    while ($n > 0) {
        $sum = $sum + ($n % 10);
        $n =  floor($n / 10);
    }

    if ($negative) $sum = -$sum;

    return $sum;
}

function mainFunc(): void {
    $n = trim(readline());

    if (!is_numeric($n)) {
        echo "Invalid number given!\n";
        return;
    }

    $n = (int) $n;

    echo sumOfDigits($n) . "\n";
}

mainFunc();