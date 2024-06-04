<?php


function canBeStringToInt(string $str): bool {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '.') return false;
    }
    return true;
}

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

    if (!is_numeric($num) || !canBeStringToInt($num)) $num = -1;

    if ($num < 1) {
        echo "Invalid number given!\n";
        return;
    }

    echo sumOfDigits($num) . "\n";
}

mainFunc();