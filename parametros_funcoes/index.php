<?php

/***
 * FUNCTIONS / FUNÇÕES - PARAMETROS
 * 
 * Como vimos atrás, uma função tem um nome e um conjunto de parenteses.
 * Dentro desses parenteses, nós podemos definir um conjunto de parametros (assinatura da função)
 * Vejamos o exemplo:
 * 
 */

function adicao($a, $b)
{
    //codigo da função aqui...
}

/**
 * Nesta função adicao, temos dois parametros $a e $b
 * São duas variaveis PHP que vão existir dentro da função.
 * Os parametros permitem passar valores para o interior de uma função quando ela é chamada.
 * Os parametros são separados por virgulas.
 * 
 */

adicionar(10, 20);
adicionar(100, 200);

function adicionar($a, $b)
{
    //echo "$a + $b = " . $a + $b; // No PHP 7 emite um aviso Warning.
    echo '<br>';
    echo "$a + $b = " . ($a + $b);
}

echo '<hr>';

# No PHP 8 já não são necessários os parenteses nas operações

$nomes = ['joão', 'ana', 'carlos'];
foreach ($nomes as $nome) {
    saudacao($nome);
}

function saudacao($valor)
{
    echo 'Bom dia ' . $valor . '<br>';
}

/**
 * Para ser mais preciso, parâmetros é o nome das variáveis existentes na definição da função
 * Argumentos são os dados passados quando a função é chamada
 */