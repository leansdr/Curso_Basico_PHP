<?php

/**
 * 
 * CICLOS/LOOPS
 * 
 * FOR
 * 
 * Permite executar um bloco de codigo determinado numero de vezes.
 * É constituido por três parâmetros:
 * 1. O iniciador - indica o valor inicial do contador.
 * 2. A condição - indica qual a condição para que o ciclo termine
 * 3. O incremento - altera o valor do contador em cada ciclo
 * 
 */

for ($x = 1; $x < 10; $x++) {
    echo $x . '<br>';
}

echo '<hr>';

/**
 * Mais uma vez, se for executada apenas uma expressão,
 * não é necessário usar chaves 
 */

for ($x = 1; $x < 10; $x++)
    echo $x . '<br>';

echo '<hr>';

# Pode conter uma assinatura diferente.
$i = 1;
for (; $i < 10;) {
    echo $i++ . '<br>';
}

echo '<hr>';

/**
 * O primeiro e ultimo parametro tambem podem ser divididos
 * em vários parametro usando a virgula como separador
 */

for ($contador = 1, $x = 10; $contador < 10; $contador++, $x--) {
    echo $x . '<br>';
}

echo '<hr>';

# Por exemplo, podemos apresentar todos os dados de um array
$nomes = ['joão', 'ana', 'carlos'];
for ($i = 0; $i < sizeof($nomes); $i++) {
    echo $nomes[$i] . '<br>';
}