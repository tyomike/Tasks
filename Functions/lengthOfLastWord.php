<?php
function lengthOfLastWord(string $string): string
{
    $string = trim($string);
    $array = explode(' ', $string);
    $lastWord = end($array);//последний эл-т массива
    $result = strlen($lastWord);
    return $result;
}

//lengthOfLastWord('w'); // 0
//lengthOfLastWord('man in BlacK'); // 5
//lengthOfLastWord('man in BlacK'); // 5
//echo lengthOfLastWord('hello, world! '); // 6