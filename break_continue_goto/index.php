<?php

/**
 * BREAK, CONTINUE, GOTO
 * 
 * Existem duas funções especiais dentro dos loops: break e continue.
 * 
 * BREAK
 * 
 * Server para interromper a execução de um loop
 */

for ($i = 0; $i < 20; $i++) {
    echo $i . '<br>';
    if ($i == 10) {
        break; // interrompe a execução do codigo.
    }
}

echo '<br>';

$nomes = ['joão', 'ana', 'pedro'];
foreach ($nomes as $nome) {
    echo $nome . '<br>';
    if ($nome == 'ana') {
        break;
    }
}

echo '<br>';

/**
 * CONTINUE
 * Permite avançar uma volta do ciclo ignorando o codigo que deveria se executado
 */

for ($i = 0; $i < 20; $i++) {
    if ($i == 10) {
        continue; // volta a linha inicial do loop.
    }
    echo $i . '<br>';
}

echo '<hr>';

$nomes = ['joão', 'ana', 'carlos'];
foreach ($nomes as $nome) {
    if ($nome == 'ana') {
        continue;
    }
    echo $nome . '<br>';
}

echo '<hr>';

/**
 * GOTO
 * É muito pouco usado porque torna a leitura do codigo mais complexa.
 * Foi introduzido no PHP 5.3 e permite sair do loop e ir para uma linha do codigo.
 * definida por uma label (nome seguido de :)
 */

for ($i = 0; $i < 20; $i++) {
    if ($i == 10) {
        goto teste; //salta para o label
    }
    echo $i . '<br>';
}
echo 'fim do loop';

teste:
echo 'AQUI';