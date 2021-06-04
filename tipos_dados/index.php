<?php

/**
 * TIPOS DE DADOS
 * ==================
 * As variaveis em PHP podem ter diferentes tipos de valores
 * a mesma variavel pode ter tipos diferentes de valores
 */

$variavel = 100;
$variavel = "cem";

#Apesar de serem variáveis de tipo implicito (o proprio PHP verifica o tipo de dados que esta sendo armazenado no momento), é importante saber:

$inteiro = 100;               #int
$float   = 10.5;              #float (com casas decimais)
$bool    = true;              #verdadeiro ou falso
$string  = "Ola Mundo";       #string (cadeia de caracteres)
$array   = [1, 2, 3];         #Array - coleção de valores
$pessoa  = new Pessoa();      #Objeto com propriedade e metodos
$nulo    = null;              #Variavel com valor nulo