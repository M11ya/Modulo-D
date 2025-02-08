<!-- Crie uma função anônima que receba duas strings e as concatene. Use-a para combinar
dois arrays de strings. -->

<?php

$array1 = ["Super", "God of", "Fifa"];
$array2 = ["Mario", "War", "25"];

$concatenar = function($str1, $str2) {
    return $str1 . " " . $str2;
};

$resultado = array_map($concatenar, $array1, $array2);

print_r($resultado);?>
