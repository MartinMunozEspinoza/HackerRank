<?php

/* 
    Staircase detail:
        This is a staircase of size n = 4
            #
           ##
          ###
         ####
    Its base and height are both equal to n. It is drawn using # symbols
    and spaces. The las line is not preceded by any spaces.
    Write a program that prints a staircase of size n.
    Sample input:
        6
    Sample output:
             #
            ##
           ###
          ####
         #####
        ######
*/

function staircase($n)
{
    // Write your code here
    $counter = $n - 1;
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j >= $counter) {
                echo "#";
            } else {
                echo " ";
            }
        }
        $counter--;
        echo "\n";
    }
}

$n = intval(trim(fgets(STDIN)));

staircase($n);
