<?php

$_mas = [];

$_mas = [1, 100, 87, 24, 45, 22, 12, 3, 79, 54, 93, 61, 37, 82, 62, 59, 35, 67, 11, 13];

$k = count($_mas);
echo 'xxx', $k, ' ';
$_max = $array[0];
$_k = 0;
echo $_mas[0];
vibor ($_max, $_k);
function vibor ($_max, $_k)
{
    if ($_k < 20 && $_max < $_mas[+$_k]) {
        $_max = $_mas[$_k];
        echo $_k;
        echo $_mas[$_k];
        vibor ($_max, $_k);


    } elseif ($_max < $_mas[+$_k]) {
        echo 'Максимальный Элемент =', $_max;


        echo ' СТОП';
    }
}