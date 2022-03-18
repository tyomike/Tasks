<?php
function addPrefix($array, $prefix)
{
    $result = [];
    for ($i = 0; $i < count($array); $i++)
    {
        $result[$i] = "{$prefix} {$array[$i]}";
    }
    return $result;
}
?>