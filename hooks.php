<?php

function canBeStringToInt(string $str): bool {
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == '.') return false;
    }
    return true;
}