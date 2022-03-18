<?php
function getIntersectionOfSortedArray ($firstArray, $secondArray)
{

    for ($i = 0; $i < count($firstArray); $i++)
    {
        for ($j = 0; $j < count($secondArray); $j++)
        {
            if ($firstArray[$i] == $secondArray[$j])
            {
                echo "{$firstArray[$i]} ";
            }
        }
    }
}
?>