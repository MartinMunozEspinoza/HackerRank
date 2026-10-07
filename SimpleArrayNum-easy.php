<?php

/* 
    Given an array of integers, find the sum of its elements
    For example, if the array ar = [1,2,3] -> 1 + 2 + 3 = 6, so return 6
    Return:
        int: the sum of the array elements
    Sample input:
        STDIN           FUNCTION
        -------         ----------
        6               ar[] size n = 6
        1 2 3 4 10 11   ar = [1,2,3,4,10,11]
    Sample output: 31
*/

function simpleArraySum($ar)
{
    // Write your code here
    $sum = 0;
    foreach ($ar as $num) {
        $sum += $num;
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
