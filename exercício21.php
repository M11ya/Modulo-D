<!-- Crie um array associativo e use array_keys para obter um array com as chaves desse
array -->

<?php

$pessoas = [
 
    "Julio",
    "Pedro",
    "João",
    "Caio"
];

$char = array_keys($pessoas);
var_dump ($char);


?>