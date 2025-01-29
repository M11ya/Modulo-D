<?php

    $num1;
    $num2;
    $operacao;
    $resultado;


    
    if (isset($num1, $num2, $operacao) && is_numeric($num1) && is_numeric($num2)) {
        switch ($operacao) {
            case "soma":
                $resultado = $num1 + $num2;
                break;
            case "subtraço":
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

?>