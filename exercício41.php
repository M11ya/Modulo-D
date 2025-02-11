<!-- Crie uma arrow function que calcule o cubo de um número e use-a para transformar um
array de números em seus cubos. -->

<?php

$cubo = fn($num) => $num ** 3;

$nums = [1, 2, 3, 4, 5];

$cub= array_map($cubo, $nums);

print_r($cub);

?>