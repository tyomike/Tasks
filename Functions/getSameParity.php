<?php
function getSameParity(array $array): array
{
    $newArray = [];

    if (empty($array)) {
        return $array;
    }

    if ($array[0] % 2 == 0) {
        foreach ($array as $value) {
            if ($value % 2 == 0) {
                $newArray[] = $value;
            }
        }
    } elseif ($array[0] % 2 != 0) {
        foreach ($array as $value) {
            if ($value % 2 != 0) {
                $newArray[] = $value;
            }
        }
    }
    return $newArray;
}