<?php
/*
Desafio 1: Imply

Funções que criei: multiplicarMatrizes(); & lerMatriz();


*/

function multiplicarMatrizes($matriz1, $matriz2) {
    $linhas1 = count($matriz1);
    $colunas1 = count($matriz1[0]);
    $linhas2 = count($matriz2);
    $colunas2 = count($matriz2[0]);

   
    if ($colunas1 !== $linhas2) {
        echo "A multiplicação de matrizes não é possível.\n";
        return null; // Retorna null para indicar que a multiplicação não é possível
    }

    $resultado = [];

    for ($i = 0; $i < $linhas1; $i++) {
        for ($j = 0; $j < $colunas2; $j++) {
            $resultado[$i][$j] = 0;
            for ($k = 0; $k < $colunas1; $k++) {
                $resultado[$i][$j] += $matriz1[$i][$k] * $matriz2[$k][$j];
            }
        }
    }

    return $resultado;
}

// Função para ler uma matriz do usuário
function lerMatriz($mensagem) {
    $matriz = [];

    $linhas = readline("Digite o número de linhas da $mensagem: ");
    $colunas = readline("Digite o número de colunas da $mensagem: ");

    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            $matriz[$i][$j] = readline("\nDigite o elemento [" . ($i + 1) . "][" . ($j + 1) . "]: ");
        }
    }

    echo "$mensagem inserida:\n";
    for ($i = 0; $i < $linhas; $i++) {
        for ($j = 0; $j < $colunas; $j++) {
            echo " " . $matriz[$i][$j];
        }
        echo "\n";
    }

    return $matriz;
}

// Matriz 1
$matriz1 = lerMatriz("Matriz 1");

// Matriz 2
$matriz2 = lerMatriz("Matriz 2");

// Executa a multiplicação
if ($resultado = multiplicarMatrizes($matriz1, $matriz2)) {
    echo "\nResultado da multiplicação de matrizes:\n";
    foreach ($resultado as $linha) {
        echo implode(" ", $linha) . "\n";
    }
}
?>
