<?php

/*
    Given a square matrix, calculate the absolute difference between the sums of its diagonals
    Return:
        int: the absolute difference in sums along the diagnonals
    Sample input:
        STDIN               Function
      ---------           ------------
      3                     arr[][] sizes n = 3, m = 3
      11 2 4                arr = [[11,2,4], [4,5,6], [10,8,-12]]
      4 5 6
      10 8 -12
    Sample output: 15
*/

function diagonalDifference($arr)
{
    // Write your code here
    $leftToRightDiagonalSum = 0;
    $rightToLeftDiagonalSum = 0;
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr); $j++) {
            if ($i == $j) {
                $leftToRightDiagonalSum += $arr[$i][$j];
            }
            if (($i + $j) == count($arr) - 1) {
                $rightToLeftDiagonalSum += $arr[$i][$j];
            }
        }
    }
    return $result = abs($leftToRightDiagonalSum - $rightToLeftDiagonalSum);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
