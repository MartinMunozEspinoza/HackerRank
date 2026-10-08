<?php

/* 
    We need to calculate and print the sum of elements in an array, considering that some integers may be very large
    Return:
        long: the sum of the array elements
    Sample input:
        STDIN                                                       Function
       --------                                                   ------------
        5                                                           arr[] size n = 5                                                  
        1000000001 1000000002 1000000003 1000000004 1000000005      arr[. . .]
    Sample output: 5000000015
*/

function aVeryBigSum($ar)
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

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
