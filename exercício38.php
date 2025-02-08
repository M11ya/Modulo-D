<!-- Crie uma função anônima para ordenar um array de strings pelo tamanho das strings (da
menor para a maior). -->

<?php

$ordenar = function ($a, $b) {
    return strlen($a) - strlen($b);
};

$palavras = ["Marte", "Jupter", "Saturno", "Terra"];
usort($palavras, $ordenar);
print_r($palavras);


?>