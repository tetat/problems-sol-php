<?php

function canBeStringToInt(string $str): bool {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '.') return false;
    }
    return true;
}

function printPyramid(int $num): void {
    $row = $num;
    $col = $num;

    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <= $col; $j++) {
            echo ($row-$i >= $j) ? ' ' : '*';
        } echo "\n";
        $col++;
    }
}

function mainFunc(): void {
    $num = trim(readline());

    if (!is_numeric($num) || !canBeStringToInt($num)) $num = -1;

    if ($num < 1) {
        echo "Invalid number given!\n";
        return;
    }

    printPyramid($num);
}

mainFunc();