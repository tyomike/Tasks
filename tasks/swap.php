<?php
function swap($array, $index)
{
    if ($index == 0 || $index == array_key_last($array))
    {
        return $array;
    }
    //Меняем местами предыдущий и следующий эл-ты, относительно текущего в массиве с помощью промежуточной переменной
    $buf = $array[$index + 1];
    $array[$index + 1] = $array[$index - 1];
    $array[$index - 1] = $buf;
    return $array;
}
?>