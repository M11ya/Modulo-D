<!-- Crie um array de números e use array_map para aplicar uma função que dobra o valor
de cada número. -->

<?php

$array = range(0,10);

$mapear = array_map("Multiplica", $array);

echo var_dump($mapear);


?>