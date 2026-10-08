<?php

/* 
    Alice and Bob each created one problem for HackerRank. A reviewer rates the two challenges,
    awarding points on a scale from 1 to 100 for three categories: problem clarity, originality, 
    and difficulty.
    The task is to calculate their comparison points by comparing each category:
    - if a[i] > b[i], then Alice is awarded 1 point.
    - if a[i] < b[i], then Bob is awarded 1 point.
    - if a[i] = b[i], then neither person receives a point.
    Returns:
        - int[2]: the first element is Alice's score and the second is Bob's score
    Sample input:
        5 6 7
        3 6 10
    Sample output: 1 1
*/

function compareTriplets($a, $b)
{
    $scores = [0, 0];
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] > $b[$i]) {
            $scores[0]++;
        } else if ($a[$i] < $b[$i]) {
            $scores[1]++;
        }
    }
    return $scores;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
