<!-- Crie dois arrays, um com chaves e outro com valores, e use array_combine para
combiná-los em um array associativo. -->

<?php

$campeões = [ "Lulu", "Ahri", "Aatrox", "Ekko" ];
$rotas = [ "Bot", "Mid", "Top", "jungle" ];
$lol = array_combine($campeões, $rotas);
var_dump($lol);

?>