<?php
function printStringReturnNumber(): int 
{
    echo "Возвращаю числовое значение обратно \n";
    return 20;
}
$my_num = printStringReturnNumber();
echo $my_num;