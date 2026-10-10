<?php

/*
    Given a time in 12-hour AM/PM format, convert it to military (24-hour) time
    Returns:
        string: a time in 12 hour format
    Sample input:
        07:05:45PM
    Sample output: 
        19:05:45
*/

function timeConversion($s)
{
    $time = substr($s, 8);
    $firstTwoDigits = substr($s, 0, 2);
    $hour = intval(substr($s, 0, 2));

    if ($time == 'PM' && $firstTwoDigits != 12) {
        $s = str_replace(substr($s, 0, 2), ($hour + 12), $s);
    }
    if ($time == 'AM' && $firstTwoDigits == 12) {
        $s = str_replace(substr($s, 0, 2), '00', $s);
    }
    return substr($s, 0, 8);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$s = rtrim(fgets(STDIN), "\r\n");

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($fptr);
