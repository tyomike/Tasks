<?php
function findIndexOfNearest(array $array, int $num): ?int
{
    if (empty($array)) {
        return null;
    }
    $result = 0;
    for ($i = 0; $i < count($array); $i++) {
        if (abs($array[$i] - $num) < abs($array[$result] + $num)) {
            $result = $i;
        }
    }
    return $result;
}
