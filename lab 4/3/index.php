<?php
// Седякин. Вариант 20
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["textarea"])) {
    $text = $_POST["textarea"];
    
    // Для русских слов
    $regexpRus = '/\b[А-Яа-яЁё]+\b/u';
    $countRus = preg_match_all($regexpRus, $text, $matchesRus);
    
    // Для английских слов
    $regexpEng = '/\b[A-Za-z]+\b/';
    $countEng = preg_match_all($regexpEng, $text, $matchesEng);
    
    echo "<h3>Результат:</h3>";
    echo "Количество русских слов: " . $countRus . "<br>";
    echo "Количество английских слов: " . $countEng;    
}
 