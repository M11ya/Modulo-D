<!-- Crie uma função que gere um número aleatório dentro de um intervalo especificado. -->

<?php

function aleatorio($min, $max)
{
    return rand($min, $max);
}

echo "\nNúmero aleatório entre 1 e 100: " . aleatorio(1, 100);


?>