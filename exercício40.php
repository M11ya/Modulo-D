<!-- Crie uma arrow function que verifique se um número é positivo e use-a para filtrar
apenas os números positivos de um array. -->

<?php

$positivo = fn($num) => $num > 0;

$num = [-2, -1, 0, 1, 2, 3, 4, 5];

$positiveNumbers = array_filter($num, $positivo);

print_r($positiveNumbers);

?>
