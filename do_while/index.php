<?php


/**
 * CICLOS/LOOPS
 * ================
 * 
 * DO WHILE
 * 
 * É muito semelhante ao ciclo WHILE, contudo, neste caso a condição
 * é avaliada após a execução do ciclo
 * 
 */

$x = 0;

do {
    echo $x++ . '<br>';
} while ($x < 10);

echo '<hr>';

/**
 * De igual modo quando so temos uma expressão a executar,
 * podemos ignorar as chaves
 */

$x = 0;
do
    echo $x++ . '<br>';
while ($x < 10);

echo '<hr>';

#OU

$x = 0;
do echo $x++ . '<br>';
while ($x < 10); # Não recomendado a usar esta sintaxe