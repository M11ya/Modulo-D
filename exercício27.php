<!-- Crie um array de palavras e use implode para transformá-lo em uma string, separando
as palavras por vírgulas. -->

<?php

$valores = [ "Um ", "Dois ", "Três "];
$nums = implode($valores);
var_dump($nums);

?>