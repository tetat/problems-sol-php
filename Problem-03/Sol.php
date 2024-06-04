<?php

function isValidChar(string $ch): bool {
    if ($ch >= "A" && $ch <= "Z") return true;
    if ($ch >= "a" && $ch <= "z") return true;
    if ($ch >= "0" && $ch <= "9") return true;
    if ($ch === "'") return true;
    return false;
}

function Reverse(string $str): string {
    $len = strlen($str);
    $i = 0;

    while ($i < $len) {
        // find a word range
        $L = $i;
        while ($i < $len && isValidChar($str[$i])) $i++;
        $R = $i-1;
        while ($i < $len && !isValidChar($str[$i])) $i++;

        // reverse a word
        while ($L < $R) {
            $temp = $str[$L];
            $str[$L] = $str[$R];
            $str[$R] = $temp;
            
            $L++; $R--;
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