<?php

$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . " número: ";
    $numero = readline();
    $numeros[] = $numero;

    if ($numero < 0) {
        $negativos++;
    } else {
        $positivos++;
    }

    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "\nQuantidade de números negativos: " . $negativos . "\n";
echo "Quantidade de números positivos: " . $positivos . "\n";
echo "Quantidade de números pares: " . $pares . "\n";
echo "Quantidade de números ímpares: " . $impares . "\n";
?>