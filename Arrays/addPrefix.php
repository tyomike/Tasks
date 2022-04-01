<?php
function addPrefix(array $array,string $prefix): array
{
    $result = [];
    for ($i = 0; $i < count($array); $i++) {
        $result[$i] = "{$prefix} {$array[$i]}";
    }
    return $result;
}
?>