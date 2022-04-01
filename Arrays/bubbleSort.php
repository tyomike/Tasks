<?php
function bubbleSort(array $array): array
{
    //   $newArray = [];
    for ($i = 0; $i < count($array); $i++) {
        for ($j = count($array) - 1; $j > $i; $j--) {
            if ($array[$j - 1] > $array[$j]) {
                $buf = $array[$j - 1];
                $array[$j - 1] = $array [$j];
                $array[$j] = $buf;
            }
        }
    }
    return $array;
}

?>