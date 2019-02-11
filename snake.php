<?php
$enterNumber = $argv[1];
$firstNumbers = [];
$start = 'down';
for ($k = 1; $k <= $enterNumber * $enterNumber; $k++)
{
    if ($start === 'down')
    {
        array_push($firstNumbers, $k);
    } else {
        array_unshift($firstNumbers, $k);
    }
    if ($k % $enterNumber === 0) {
        array_push($secondNumbers, $firstNumbers);
        $firstNumbers = [];
        if ($start === 'down')
        {
            $start = 'up';
        } else {
            $start = 'down';
        }
    }
}
$secondNumbers = [];
for ($i = 0; $i < count($secondNumbers); $i++)
{
    for ($t = 1; $t < count($secondNumbers) + 1; $t++)
    {
        if ($secondNumbers[$t - 1][$i] < 10)
        {
            echo '  ' . $secondNumbers[$t - 1][$i];
        } else {
            echo ' ' . $secondNumbers[$t - 1][$i];
        }
        if ($t % $enterNumber === 0)
        {
            echo PHP_EOL;
        }
    }
}