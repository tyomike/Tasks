<?php
function sumIntervals ($array)
{
    $result = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            $current = abs($array[1][$j] - $array[0][$j]);
            $result += $current;
        }
    }
    return $result;
}