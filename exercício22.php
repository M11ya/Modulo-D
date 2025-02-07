<!-- Crie dois arrays e use array_merge para combiná-los em um único array -->

<?php

$pessoas = [ "Caio", "joão", "Wallyson", "Pedro" ];
$idade =  [ 28, 18, 26, 19 ];

$identificação = array_merge($pessoas, $idade);
var_dump($identificação);

?>