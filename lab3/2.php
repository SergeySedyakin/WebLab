<?php

$intNum = 1;
echo $intNum, " - целочисленная переменная\n";

$floatNum = 1.01;
echo "\n{$floatNum} - переменная с плавающей запятой\n";


echo "\n", (1 + 11);

$lastMonth = 10000;
$thisMonth = 9000;

echo "\nВ прошлом месяце я потратил {$lastMonth} а в этом месяце я потратил {$thisMonth}.";
echo "\nНасколько больше я потратил в прошлом месяце, чем в этом месяце? ", abs($lastMonth - $thisMonth);