<?php

function absolute(int $num): int {
    if ($num < 0) return -1 * $num;
    return $num;
}

function findMin(array $nums): int {
    if (count($nums) === 0) return -1;

    $min = $nums[0];
    foreach ($nums as $num) {
        if ($min > absolute($num)) {
            $min = absolute($num);
        }
    }

    return $min;
}

function mainFunc(): void {

    $nums = explode(' ', trim(readline()));
    
    $len = count($nums);

    $nums = array_filter($nums, 'is_numeric');

    if (count($nums) === 0 || count($nums) !== $len) {
        echo "Invalid or empty array!\n";
        return;
    }

    echo findMin($nums) . "\n";
}

mainFunc();
