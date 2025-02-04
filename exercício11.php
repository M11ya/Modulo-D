<?php

for ($i = 0; $i < 10; $i++) {
    echo "Digite um valor: ";
    $valores[] = readline(); 
}

echo "\nValores na ordem inversa:\n";
for ($i = 9; $i >= 0; $i--) {
    echo $valores[$i] . "\n";
}

?>