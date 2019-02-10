<?php
$edge = $argv[1];
if (!isset($edge))
{
    echo "Enter any number";
}
{
    diamond($edge);
}
function diamond($a)
{
    $Triangle = $mid = ($a - 1) / 2;
    for ($i = 0; $i <= $mid; $i++)
    {
        for ($j = 0; $j < $Triangle; $j++)
        {
            echo ' ';
        }
        for ($k = 0; $k < $a - $Triangle * 2; $k++)
        {
            echo '*';
        }
        echo PHP_EOL;
        $Triangle--;
    }
    $Triangle++;
    for ($i = 0; $i < $mid; $i++)
    {
        $Triangle++;
        for ($j = 0; $j < $Triangle; $j++)
        {
            echo ' ';
        }
        for ($k = $a - $Triangle * 2; $k > 0; $k--)
        {
            echo '*';
        }
        echo PHP_EOL;
    }
}
