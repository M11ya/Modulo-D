<!-- Crie um vetor que armazene o nome de todos os meses do ano. Peça ao usuário que digite um número e ele informe qual o nome do mês correspondente.  -->

<?php

$meses = [
    1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril",
    5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto",
    9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
];

echo "Digite um número (1 a 12) para ver o mês correspondente: ";
$numero = (int)readline(); 

if ($numero >= 1 && $numero <= 12) {
    echo "O mês correspondente ao número $numero é " . $meses[$numero] . ".\n";
}

?>