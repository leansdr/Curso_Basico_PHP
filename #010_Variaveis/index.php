<?php

/*
 *  Variaveis
 * ====================
 * São usadas para guardar dados: numero, textos, ect.
 * Podemos apresentar e modificar os seus valores ao longo do codigo
 * Definem-se com um dollar ($) e um identificador (nome da variavel)
 * */


/**
 * São variaveis fracamente tipadas - pode ser alterado o seu tipo durante a execução do programa
 * Podemos definir e iniciar uma variavel 
 * $variavel = 100
 */
$variavel = 100;
echo $variavel;

/*
 * Podemos alterar o tipo de valores de uma variavel
 * $variavel = "teste";
 */
//$variavel2 = "teste";
//echo $variavel;

#As variaveis são case sensitive
//$variavel = "uma variavel";
//$Variavel = "Outra Variavel";

#Variaveis não podem ser declaradas das maneiras abaixo
/*
$1var = 0;
$!var = 0;
$variavel(1) = 0;
$variavel um = 0;
$variavel-um = 0; 
 */

#Variaveis podem ser declaradas das maneiras abaixo:

//$var1 = 0;
//$var_um = 0;
//$varUm = 0;
//$_um = 0;
//$_1 = 0;

#Formas de escrever variaveis - Deve ser mantido o mesmo estilo ao longo do projeto

//$umaVariavel = 0; # Camel Case
//$uma_variavel = 0; # com undercor Snake Case
//$UmaVariavel = 0; # Studly case (Não recomendado)