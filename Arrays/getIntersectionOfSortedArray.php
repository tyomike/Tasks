<?php
function getIntersectionOfSortedArray(array $firstArray, array $secondArray): array
{
    $newArray = [];
    for ($i = 0; $i < count($firstArray); $i++) {
        for ($j = 0; $j < count($secondArray); $j++) {
            if ($firstArray[$i] == $secondArray[$j]) {
                 array_push($newArray, $firstArray[$i]);
            }
        }
    }
    return $newArray;
}

?>