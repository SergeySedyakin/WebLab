<<<<<<< HEAD
<?php
function isSumGreaterThanTen($a, $b): bool
{
    return ($a + $b) > 10;
}

echo isSumGreaterThanTen(7, 6), "\n";

function areNumbersEqual($a, $b): bool
{
    return $a === $b;
}

echo areNumbersEqual(4, 4), "\n";

$test = 0;
echo ($test == 0) ? 'верно' : '', "\n";

$age = 23;
if ($age < 10 || $age > 99) {
    echo "число меньше 10 или больше 99\n";
} else 
{
    $sum = array_sum(str_split((string) $age));
    if ($sum <= 9) 
    {
        echo "Сумма цифр однозначна.\n";
    } else 
    {
        echo "Сумма цифр двузначна.\n";
    }
}

$arr = [5, 9, 8];
if (count($arr) == 3) 
{
    echo 'Сумма элементов массива: ', array_sum($arr), "\n";
=======
<?php
function isSumGreaterThanTen($a, $b): bool
{
    return ($a + $b) > 10;
}

echo isSumGreaterThanTen(7, 6), "\n";

function areNumbersEqual($a, $b): bool
{
    return $a === $b;
}

echo areNumbersEqual(4, 4), "\n";

$test = 0;
echo ($test == 0) ? 'верно' : '', "\n";

$age = 23;
if ($age < 10 || $age > 99) {
    echo "число меньше 10 или больше 99\n";
} else 
{
    $sum = array_sum(str_split((string) $age));
    if ($sum <= 9) 
    {
        echo "Сумма цифр однозначна.\n";
    } else 
    {
        echo "Сумма цифр двузначна.\n";
    }
}

$arr = [5, 9, 8];
if (count($arr) == 3) 
{
    echo 'Сумма элементов массива: ', array_sum($arr), "\n";
>>>>>>> 4fa9ae98608fb7efd5d870aab2416107899bc3cb
}