<?php
function get($array, $index, $default = null): ?string
{
    if (empty($array)) {
        return null;
    }
        if ($index < count($array)) {
            return $array[$index];
        } else return $default;
}
?>
