<!-- Crie uma função que verifique se uma string é um palíndromo (lê-se igual de trás para
frente). -->

<?php

$s = null;
$s = readline("Digite uma palavra: ");

function palindromo($s)
{
    $s = strtolower(str_replace(' ', '', $s));
    return $s === strrev($s);
}

if (palindromo($s)) {
    echo "A palavra '$s' é um palíndromo.";
} else {
    echo "A palavra '$s' não é um palíndromo.";
}
?>