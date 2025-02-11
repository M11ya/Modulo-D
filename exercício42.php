<!-- Crie uma arrow function que converta uma string para maiúsculas e use-a para
transformar um array de strings. -->

<?php

$sr = fn($string) => strtoupper($string);

$srs = ["olá", "mundo", "php", "arrow functions"];

$s = array_map($sr, $srs);

print_r($s);

?>