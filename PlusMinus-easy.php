<?php

/*
    Given an array of integers. calculate the ratios of its elements that are positive,
    negative and zero. Print the decimal value of each fraction on a new line with 6 places
    after the decimal
    Sample input:
        STDIN               FUNCTION
       --------            ----------
       6                    arr[] size n = 6
       -4 3 -9 0 4 1        arr = [-4, 3, -9, 0, 4, 1]
*/

function plusMinus($arr)
{
    // Write your code here
    $positiveCounter = 0;
    $negativeCounter = 0;
    $zeroCounter = 0;
    foreach ($arr as $num) {
        if ($num > 0) {
            $positiveCounter++;
        } else if ($num < 0) {
            $negativeCounter++;
        } else {
            $zeroCounter++;
        }
    }
    echo $positiveCounter / count($arr) . "\n";
    echo $negativeCounter / count($arr) . "\n";
    echo $zeroCounter / count($arr) . "\n";
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
