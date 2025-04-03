<?php //Седякин. Вариант 20
$str = "tet tet-a-tet teta tit tot trallalero tralala tut";
$regexp = "/(?=(t.t))/";
preg_match_all($regexp, $str, $matches);
print_r($matches[1]);