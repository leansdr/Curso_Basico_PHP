<?php

/***
 * 
 * FUNCIONS / FUNÇÕES
 * 
 * Funções são blocos de códigos identificados por um nome e uma assinatura.
 * e que permitem que o código seja reutilizado e organizado de uma forma muita mais consistente.
 * 
 * Estes blocos são só executados quando são solicitados.
 * 
 * Definimos uma função utilizando a palavra reservada FUNCTION, seguida de um nome,
 * um conjunto de parenteses e um bloco de codigo.
 * 
 */

// Forma correta da escrita de uma função

//function funcao()
{
    // codigo da função aqui
}

//exemplo da sua aplicação

echo 'Inicio da aplicação';
echo '<br>';
executar();

function executar()
{
    echo 'A função foi executada';
}

//No PHP o nome das funções são case insensitive.
// function falar()
// {
// }

// function FALAR()
// {
// }

/**
 * Podem ser usados vários padrões para o nome das funções
 * os mais comuns são o Camel Case e o Snake Case
 */
function camelCase()
{
}

function snake_case()
{
}

function getClient()
{
}

function get_cliente()
{
}