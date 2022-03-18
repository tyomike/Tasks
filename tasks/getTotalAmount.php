<?php
function getTotalAmount ($array, $currency)
{
    $sum = 0;
    foreach ($array as $key => $value)
    {
        if ($currency === substr($array[$key], 0, 3))
        {
            $sum += substr($value, 4);//В переменную записываются значения по индексу 4 из каждого value
        }
    }
    return $sum;
}