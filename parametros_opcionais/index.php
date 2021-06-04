<?php

/**
 * FUNCTION / FUNÇÕES
 * 
 * PARÂMETROS OPCIONAIS
 * 
 * Podemos cria funções que tem parâmetros com o valor pré-definido
 * A chamada desta função não obriga a definir um argumento para esses parametros
 * 
 */

function multiplicar($a, $b = 2)
{
    // codigo aqui

    /**
     * $a será o valor passado por argumento (obrigatório)
     * $b será:
     *    O valor do argumento se ele for passado na chamada
     *    O valor 2 se não for passado argumento
     */

    echo $a * $b;
}

multiplicar(10); // $a = 10 e $b = 2
echo '<br>';
multiplicar(10, 20);
echo '<br>';

//Os parametros opcionais tem que ser definidos apos os parametros não opcionais

function dividir($a = 2, $b)
{
    echo "$a e $b";
}

dividir(20, 10);

// No PHP 7 ainda era possivel fazer isso sem aviso, mas no PHP 8 aparecerá um aviso.