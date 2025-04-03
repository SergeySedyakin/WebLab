<?php //Седякин. Вариант 20
$str = 'a1b2c3';
$result = preg_replace_callback(pattern: '/\d+/', 
callback: function($matches): string 
{
    return (string)((int)(3*($matches[0] * $matches[0])));
}, subject: $str);

echo $result;