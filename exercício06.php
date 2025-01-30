<?php
$alunos = [];
$totalNotas = 0;

$maiorNota = 0;
$nomeMaiorNota = null;

for ($i = 0; $i < 10; $i++) {
    $nome = readline("Digite o nome do aluno " . ($i + 1) . ": ");
    $nota = (float)readline("Digite a nota do aluno " . ($i + 1) . ": ");

    $alunos[$i] = ["nome" => $nome, "nota" => $nota];

    $totalNotas += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
        $nomeMaiorNota = $nome;
    }
}

$media = $totalNotas / 10;

echo "A média de notas da classe é: " . $media . "\n";
echo "O aluno com a maior nota é: " . $nomeMaiorNota . " com nota " . $maiorNota . "\n";
?>