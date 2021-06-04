<?php

/** 
 * 
 * EXPRESSÃO MATCH
 * 
 * No PHP 8 foi introduzida uma nova expressão condicional designada por MATCH
 * É muito semelhante ao SWITCH, mas com uma sintaxe mais concisa
 * 
 */

# COM SWITCH

$x = 10;

switch ($x) {
    case 5:
        echo 'Parou no 5';
        break;
    case 10:
        echo 'Parou no 10';
        break;
    case 15:
        echo 'Parou no 15';
    default:
        echo 'é um numero diferente de 5, 10 e 15';
        break;
}

echo '<hr>';

# COM MATCH

echo match ($x) {
    5 => 'Parou no 5',
    10 => 'Parou no 10',
    15 => 'Parou no 15',
    default => 'é um numero diferente de 5, 10 e 15'
};

# No Match apenas uma expressão é valida por cada condição.
# E é possivel executar a mesma operação para várias condições
#

$x = 10;
$opcao = match($x) {
    2 => 'é 2';
    4,5,6 => 'é 4,5, ou 6';
    default => 'é outro valor';
};

# No switch tambem é possivel 

$x = 10;
switch($x) {
    case '2':
      $opcao = 'é 2';
      break;
    case '4':
    case '5':
    case '6':
        $opcao = 'é 4,5 ou 6';
        break;
    default:
        $opcao = 'é outro valor';
        break;
}

/**
 * IMPORTANTE
 * No switch as comparações podem ser feitas so por valor (==)
 * No caso do Match, são sempre feitas por valor e tipo (===)
 * 
 */

 echo '<hr>';

 $x = '1';

 switch($x){
     case 1:
        echo 'Inteiro';
        break;
    case '1':
        echo 'String';
 } #Inteiro

 match($x){
     1 => 'Inteiro',
     '1' => 'String'
 }; #string