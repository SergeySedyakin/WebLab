<?php
function increaseEnthusiasm(string $str) 
{
    return $str."!";
}
echo increaseEnthusiasm("one")."\n";

function repeatThreeTimes(string $str) 
{
   return $str.$str.$str;
}
echo repeatThreeTimes("two?")."\n";
echo increaseEnthusiasm(repeatThreeTimes("NO"))."\n";
function cut(string $str, int $symbols = 10) {}

function printArrayRecursively($array, $index = 0) 
{
    if ($index >= count($array)) 
    {
        return;
    }

    echo $array[$index] . "\n";
    printArrayRecursively($array, $index + 1);
}

$numbers = [1, 2, 3, 4, 5];
printArrayRecursively($numbers);

function sumDigitsUntilSingle($number) 
{
    $digits = str_split((string)$number);

    $sum = array_sum($digits);

    if ($sum > 9) 
    {
        return sumDigitsUntilSingle($sum);
    }

    return $sum;
}

$number = 9875;
echo "Cумма: " . sumDigitsUntilSingle($number)."\n";