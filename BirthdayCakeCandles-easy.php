<?php

/*
    You are in charge of the cake for a child's birthday. It will
    have one candle for each year of ttheir total age. They will only be able to blow
    out the tallest of the candles. Your task is to count how many candles are the tallest
    Returns:
        - int: the number of candles that are tallest
    Sample input:
        4
        3 2 1 3
    Sample output:
        2
*/

function birthdayCakeCandles($candles)
{
    $candleCounter = 0;
    $maxNum = $candles[0];
    foreach ($candles as $candle) {
        if ($candle > $maxNum) {
            $maxNum = $candle;
            $candleCounter = 0;
        }
        if ($candle == $maxNum) {
            $candleCounter++;
        }
    }
    return $candleCounter;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
