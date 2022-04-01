<?php
function isContinuousSequence(array $array): bool
{
    if (count($array) < 2) {
        return false;
    }
    foreach ($array as $key => $value) {
        if ($value == $array[$key + 1] - 1) {
            return true;
        }
    }
    return false;
}

?>