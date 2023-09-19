<?php

function printEvenNumsUsingFor($start, $end)
{
    for ($i = $start + 1; $i <= $end; $i += 2) {
        echo $i . PHP_EOL;
    }
}

function printEvenNumsUsingWhile($start, $end)
{
    while ($start <= $end) {
        echo $start + 1 . PHP_EOL;
        $start += 2;
    }
}

function printEvenNumsUsingDoWhile($start, $end)
{
    do {
        echo $start + 1 . PHP_EOL;
        $start += 2;
    } while ($start <= $end - 1);
}

echo "Even numbers between 1-20 with a step of 2 using for loop" . PHP_EOL;
printEvenNumsUsingFor(1, 20);
echo PHP_EOL;

echo "Even numbers between 1-20 with a step of 2 using while loop" . PHP_EOL;
printEvenNumsUsingWhile(1, 20);
echo PHP_EOL;

echo "Even numbers between 1-20 with a step of 2 using do while loop" . PHP_EOL;
printEvenNumsUsingDoWhile(1, 20);
echo PHP_EOL;
