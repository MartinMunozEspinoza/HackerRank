<?php

/* 
    Given five positive integers, find the minimum and maximum values that can be calculated
    by summing exactly four of the five integers. Then print the respective minimum and maximum
    values as a single line of two spaces separated long integers
    Sample input:
        1 2 3 4 5
    Sample output:
        10 14
*/

function sum($array, $numb): int
{
    $result = 0;
    for ($i = 0; $i < 5; $i++) {
        if ($numb == $i) {
            $result += 0;
        } else {
            $result += $array[$i];
        }
    }
    return $result;
}

function miniMaxSum($arr)
{
    $minNumb = sum($arr, 4);
    $maxNumb = sum($arr, 0);

    for ($i = 0; $i < 5; $i++) {
        $numb = sum($arr, $i);
        if ($numb < $minNumb) {
            $minNumb = $numb;
        }
        if ($numb > $maxNumb) {
            $maxNumb = $numb;
        }
    }

    echo $minNumb . " ";
    echo $maxNumb;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
