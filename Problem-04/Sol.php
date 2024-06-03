<?php

function printPyramid(int $n): void {
    $row = $n;
    $col = $n;

    for ($i = 1; $i <= $row; $i++) {
        for ($j = 1; $j <= $col; $j++) {
            echo ($row-$i >= $j) ? ' ' : '*';
        } echo "\n";
        $col++;
    }
}

function mainFunc(): void {
    $n = (int) trim(readline());

    if ($n < 1) {
        echo "Invalid number given!\n";
        return;
    }

    printPyramid($n);
}

mainFunc();