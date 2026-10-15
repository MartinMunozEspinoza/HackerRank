<?php

/*

*/

function getFallPosition($tree, $fruitDistances)
{
    $positions = [];
    for ($i = 0; $i < count($fruitDistances); $i++) {
        $positions[] = $tree + $fruitDistances[$i];
    }
    return $positions;
}

function countWithinRange($start, $end, $item)
{
    $counterFruit = 0;
    for ($i = 0; $i < count($item); $i++) {
        if ($item[$i] >= $start && $item[$i] <= $end) {
            $counterFruit++;
        }
    }
    return $counterFruit;
}

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges)
{
    // Write your code here
    $appleFallPositions = [];
    $orangeFallPositions = [];
    $totalFruitsWithinRange = [];

    $appleFallPositions = getFallPosition($a, $apples);
    $orangeFallPositions = getFallPosition($b, $oranges);

    $totalFruitsWithinRange[] = countWithinRange($s, $t, $appleFallPositions);
    $totalFruitsWithinRange[] = countWithinRange($s, $t, $orangeFallPositions);

    for ($i = 0; $i < count($totalFruitsWithinRange); $i++) {
        echo $totalFruitsWithinRange[$i] . "\n";
    }
}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$s = intval($first_multiple_input[0]);

$t = intval($first_multiple_input[1]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$a = intval($second_multiple_input[0]);

$b = intval($second_multiple_input[1]);

$third_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($third_multiple_input[0]);

$n = intval($third_multiple_input[1]);

$apples_temp = rtrim(fgets(STDIN));

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

$oranges_temp = rtrim(fgets(STDIN));

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
