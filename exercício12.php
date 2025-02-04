<!-- Utilizando vetores, cadastre 10 pessoas, sendo que você deverá utilizar um vetor para cadastrar cada pessoa. Obtenha seguintes dados do usuário: nome, cidade, idade, sexo. 
Ao final do cadastro e armazenamento seu programa deverá exibir: 
1. Uma listagem de todos os nomes e idades das pessoas cadastradas;
 2. Uma listagem de todos os nomes de quem mora em Santos; 3. Uma listagem de todos os nomes de quem tem mais de 18 anos; 4. 
E quantas pessoas cadastradas são do sexo masculino. -->

<?php

$pessoas = [];

for ($i = 0; $i < 10; $i++) {
    echo "Digite seu Nome: ";
    $Nome = readline();
    
    echo "Digite sua Idade: ";
    $Idade = (int)readline(); 
    
    echo "Digite seu Sexo (M/F): ";
    $Sexo = readline();
    
    echo "Digite sua Cidade: ";
    $Cidade = readline();

}
    
$pessoas[] = ["Nome" => $Nome, "Idade" => $Idade,  "Sexo" => $Sexo, "Cidade" => $Cidade];


echo "\nLista de todas as pessoas cadastradas:\n";
foreach ($pessoas as $pessoa) {
    echo "Nome: " . $pessoa["Nome"] . " - Idade: " . $pessoa["Idade"] . "\n";
}

echo "\nPessoas que moram em Santos:\n";
foreach ($pessoas as $pessoa) {
    if (($pessoa["Cidade"]) == "santos") {
        echo "Nome: " . $pessoa["Nome"] . "\n";
    }
}

echo "\nPessoas com mais de 18 anos:\n";
foreach ($pessoas as $pessoa) {
    if ($pessoa["Idade"] > 18) {
        echo "Nome: " . $pessoa["Nome"] . "\n";
    }
}

?>
