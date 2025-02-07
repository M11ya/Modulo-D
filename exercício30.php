<!-- Crie uma função que calcule o fatorial de um número -->

<?php

$num = null;
echo ("Digite o numero: " . $num);
$num = readline();

function fatorial($num)
{
    if ($num == 0 || $num == 1) {
        return 1;
    } else {
        return array_product(range(1, $num));
    }
}

echo fatorial($num);

?>