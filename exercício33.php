<!-- Crie uma função que calcule a média de um array de números. -->

<?php

$nums = [5];

for($i = 0; $i < 5; $i++) {
$nums = readline("Digite o Número: ");

}

function media($nums) {
    if (empty($nums)) {
        return 0;
    }
    return array_sum($nums) / count($nums);
}

echo ("A média: " . $nums);

?>
