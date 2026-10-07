<?php

/*
    Complete the function SolveMeFirst to compute the sum of two integers
    Returns: 
        - int: the sum of a and b
    Sample Input:
        a = 3
        b = 3
    Sample output: 5
*/

function solveMeFirst($a, $b)
{
    // Hint: Type return $a + $b; below  
    return $a + $b;
}

$handle = fopen("php://stdin", "r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a, (int)$_b);
print($sum);
fclose($handle);
