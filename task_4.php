<?php

function printFibonacci($n)
{
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= $n; $i++) {
        echo $first . PHP_EOL;
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

printFibonacci(15);
