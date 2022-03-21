<?php
function ipToInt($string)
{
    $array = explode('.', $string);
    $result = ($array[0] * 256 ** 3) + ($array[1] * 256 ** 2) + ($array[2] * 256 ** 1) + ($array[3] * 256 ** 0);//256 - максимальное число в актетах IPv4, 3-2-1 - индексы
    return print ($result);
}

//ipToInt('128.0.0.1');
//ipToInt('0.0.0.0'); // 0
ipToInt('255.255.255.255'); // 4294967295
function intToIp ($num)
{

}
