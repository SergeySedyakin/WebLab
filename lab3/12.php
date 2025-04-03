<<<<<<< HEAD
<?php
$numbers = [10, 20, 30, 40, 50];
$average = array_sum($numbers) / count($numbers);
echo "Среднее арифметическое: $average\n";

$sum = array_sum(range(1, 100));
echo "Сумма чисел от 1 до 100: $sum\n";

$numbers = [4, 9, 16, 25];
$sqrtNumbers = array_map('sqrt', $numbers);
echo "Массив с квадратными корнями: " . implode(', ', $sqrtNumbers) . "\n";

$alphabet = range('a', 'z');
$alphabetNumbers = array_combine($alphabet, range(1, 26));
echo "Массив с буквами и числами:\n";
print_r($alphabetNumbers);

$string = '1234567890';
$pairs = str_split($string, 2);
$sumPairs = array_sum($pairs);
=======
<?php
$numbers = [10, 20, 30, 40, 50];
$average = array_sum($numbers) / count($numbers);
echo "Среднее арифметическое: $average\n";

$sum = array_sum(range(1, 100));
echo "Сумма чисел от 1 до 100: $sum\n";

$numbers = [4, 9, 16, 25];
$sqrtNumbers = array_map('sqrt', $numbers);
echo "Массив с квадратными корнями: " . implode(', ', $sqrtNumbers) . "\n";

$alphabet = range('a', 'z');
$alphabetNumbers = array_combine($alphabet, range(1, 26));
echo "Массив с буквами и числами:\n";
print_r($alphabetNumbers);

$string = '1234567890';
$pairs = str_split($string, 2);
$sumPairs = array_sum($pairs);
>>>>>>> 4fa9ae98608fb7efd5d870aab2416107899bc3cb
echo "Сумма пар чисел: $sumPairs\n";