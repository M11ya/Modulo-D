<!-- Crie uma função que receba um número e retorne "Par" se o número for par e "Ímpar" se
for ímpar. -->

<?php

$num = null;
$num = readline();
function verificar($num) {
    return ($num % 2 == 0) ? "Par" : "Ímpar";
}

echo verificar($num);

?>