<?php
//function sumIntervals ($array)
//{
//    $result = 0;
//    for ($i = 0; $i < count($array); $i++) {
//        for ($j = 0; $j < count($array[$i]); $j++) {
//            $current = abs($array[1][$j] - $array[0][$j]);
//            $result += $current;
//        }
//    }
//    return $result;
//}
function sumIntervals ($array)
{
    $result = 0;
    $firstItem = 0;//Первый параметр подмассива, из него будем вычитать второй параметр
    $secondItem = 0;
    foreach ($array as $currentKey => $currentValue)
    {
        foreach ($array as $nextKey => $nextValue)
        {
            if ($nextKey !== $currentKey)
            {
                if ($nextValue[0] < $currentValue[0] && $nextValue[0] > $currentValue[1] && $nextValue[1] )
                {
                    $firstItem += $nextValue[1];
                }
                if ($nextValue[0] > $currentValue[0] && $nextValue[0] < $currentValue[1])
                {
                    
                }
            }
        }
    }
}
