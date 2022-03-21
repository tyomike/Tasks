<?php
function findIndexOfNearest ($array, $num)
{
    $result = 0;
    for ($i = 0; $i < count($array); $i++)
    {
        if (abs($array[$i] - $num) < abs($array[$result] - $num))
        {
            $result = $i;
        }
    }
    return $result;
}