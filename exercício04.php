<?php

$numero = readline("Digite o primeiro número: ");
    echo "Tabuada de $numero:
    "; 
    for ($i = 1; $i <= 10; $i++) { 
        $resultado = $numero * $i; 
        echo "$numero x $i = $resultado
"; 
    } 


?>
