<?php

function Reverse(string $str): string {
    $len = strlen($str);
    $i = 0;

    while ($i < $len) {
        // find a word range
        $L = $i;
        while ($i < $len && $str[$i] !== ' ') $i++;
        $R = $i-1;
        while ($i < $len && $str[$i] === ' ') $i++;

        // reverse a word
        while ($L < $R) {
            $temp = $str[$L];
            $str[$L] = $str[$R];
            $str[$R] = $temp;
            
            $L++;
            $R--;
        }
    }

    return $str;
}

function mainFunc(): void {
    $str = (string) trim(readline());

    if ($str === "") {
        echo "Given string is empty!\n";
        return;
    }

    echo Reverse($str) . "\n";
}

mainFunc();