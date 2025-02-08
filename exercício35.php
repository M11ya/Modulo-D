<!-- Crie uma função anônima que filtre apenas os números pares de um array. -->

<?php

$num = [ 1, 3, 5, 6, 8, 10, 13, 14];

$filtrar = function($values) {
    return ($values % 2) == 0;
};

$num = array_filter($num, $filtrar);

echo ("Os números pares são: " . implode(", ", $num));


?>
