<!-- crie uma função anônima que receba um número e retorne o dobro dele. Use a função
anônima para dobrar os valores de um array. -->

<?php

$num = [5, 10, 15, 20];
$mult = function($value) {
    return $value * 2;
};

$dobro = array_map($mult, $num);
echo "\nOs Números dobrados são: " . implode(", ", $dobro);