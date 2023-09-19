<?php

function printFibonacci()
{
    $first = 0;
    $second = 1;

    for ($i = 1; $i <= 10; $i++) {
        echo $first . PHP_EOL;
        if ($first > 100) break;

        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

printFibonacci();
