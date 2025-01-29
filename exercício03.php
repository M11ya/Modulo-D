<?php
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$operacao = readline("Digite a operação (soma, subtração, multiplicacao, divisao): ");
$resultado = '';

if (isset($num1, $num2, $operacao) && is_numeric($num1) && is_numeric($num2)) {
    switch ($operacao) {
        case "soma":
            $resultado = $num1 + $num2;
            break;
        case "subtração":
            $resultado = $num1 - $num2;
            break;
        case "multiplicacao":
            $resultado = $num1 * $num2;
            break;
        case "divisao":
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                $resultado = "Erro: Divisão por zero!";
            }
            break;
        default:
            $resultado = "Operação inválida";
            break;
    }
} else {
    $resultado = "Por favor, insira números válidos.";
}

echo $resultado;
?>