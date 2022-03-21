<?php
function get($array, $index, $default = null)
{
    if ($index < count($array))
    {
        return $array[$index];
    }
    else return $default;
}

?>
