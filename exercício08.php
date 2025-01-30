<?php

$vt = [];


for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . "º valor: ";
    $valor = 0;
    $inserindo = ''; 
    while (true) {
        $char =  null; 
        if ($char === "\n") { 
            break;
        }
        $inserindo .= $char;
    }
    $valor = (float)$inserindo; 
    $vt[] = $valor; 
}


echo "\nDigite um número para multiplicar todos os elementos do vetor: ";
$multiplicador = 0;
$inserindo = ''; 
while (true) {
    $char = null; 
    if ($char === "\n") {
        break;
    }
    $input .= $char; 
}
$multiplicador = (float)$inserindo; 
$resultado = [];
for ($i = 0; $i < 10; $i++) {
    $resultado[] = $vt[$i] * $multiplicador; 
}

echo "\nResultado da multiplicação:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Posição " . ($i + 1) . ": " . $resultado[$i] . "\n";
}
?>







?>