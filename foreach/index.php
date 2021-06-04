<?php


/**
 * CICLOS/LOOPS
 * 
 * FOREACH
 * 
 * É um ciclo especialmente concebido para fazer uma iteração
 * pelos valores de um array
 */

$nomes = ['joão', 'ana', 'carlos'];
foreach ($nomes as $nome) {
    echo $nome . '<br>';
}

echo '<br>';

/**
 * Existe ainda uma outra assinatura que permite ir buscar
 * a chave e o valor do array
 */

$capitais = [
    'Portugal' => 'Lisboa',
    'Brasil'  => 'Brasília',
    'Espanha' => 'Madrid'
];

foreach ($capitais as $keys => $value) {
    echo "Para o país $keys a capital é $value.<br>";
}