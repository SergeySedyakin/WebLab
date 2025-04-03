<?php //Седякин. Вариант 20
$str = "tet tet-a-tet teta tit tot trallalero tralala tut";
$regexp = "/(?=(t.t))/"; 
$matches = [];
preg_match_all($regexp, $str, $matches);
var_dump($matches);