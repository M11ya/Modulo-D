<!-- Crie uma função anônima que calcule o quadrado de um número. Use-a para
transformar um array de números em seus quadrados. -->

<?php

$num = [2, 4, 6];

$quadrado = function($potencia) {
    return $potencia * $potencia;
};

$resultado = array_map($quadrado, $num);

print_r($resultado);

?>