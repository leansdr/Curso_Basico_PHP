<?php

/** 
 * DECLARAÇÕES/INSTRUÇÕES CONDICIONAIS 
 * ==============================================
 * 
 * São instruções utilizadas para controlar o fluxo da aplicação de acordo
 * com determinadas condições.
 * 
 * Para a verificação das condições destas declarações, recorremos ao uso 
 * de operadores de comparação combinados com os operadores lógicos.
 * 
 * O PHP contém várias estruturas condicionais, como iremos ver,
 * e no PHP 8 foi introduzida mais uma estrutura que também iremos
 * conhecer
 * 
 */

/** 
 * DECLARAÇÕES / INSTRUÇÕES CONDICIONAIS
 * 
 * 1. Declaração IF - define blocos de código que só são executados
 * se a condição for verdadeira (true)
 *  
 */

$nome = 'joão';

if ($nome == 'joão') {
    echo 'Foi identificado o nome do autor do video.';
}

# 1.1. IF...ELSE

$idade = 18;
if ($idade <= 18) {
    echo 'Adolescente';
} else {
    echo 'Adulto';
}

# 1.2. IF...ELSEIF...ELSE

$nota = 5; // de 0 a 10
if ($nota <= 2) {
    echo 'Nota fraca';
} elseif ($nota <= 4) {
    echo 'Nota insuficiente';
} elseif ($nota <= 6) {
    echo 'Nota positiva';
} elseif ($nota <= 8) {
    echo 'Nota muito positiva';
} else {
    echo 'Nota excelente';
}

# Podemos deixar de usar as chaves {}, se só existir uma instrução no bloco.

if ($nota <= 2)
    echo 'Nota fraca';
elseif ($nota <= 4)
    echo 'Nota insuficiente';
elseif ($nota <= 6)
    echo 'Nota positiva';
elseif ($nota <= 8)
    echo 'Nota muito positiva';
else
    echo 'Nota excelente';

# ATENÇÃO - No caso de houver um bloco com mais de uma instrução devemos usar a chave {}

if ($nota <= 2) {
    echo 'Nota fraca';
    echo 'Reportar ao diretor da escola';
} elseif ($nota <= 4)
    echo 'Nota insuficiente';
elseif ($nota <= 6)
    echo 'Nota positiva';
elseif ($nota <= 8)
    echo 'Nota muito positiva';
else
    echo 'Nota excelente';

/** 
 *  
 *  1.3. Uso de operadores lógicos
 * 
 */

$numero = 20;

if ($numero > 10 && $numero != 30) {
    // executar o código
} else {
    // executar outro código
}

# 1.4. Condições dentro de Condições
$numero = 10;

if ($numero >= 0) {
    if ($numero >= 100) {
        echo 'O número é igual ou maior que 100';
    } else {
        echo 'O numero é positivo, mas inferior a 100';
    }
} else {
    echo 'O número é negativo';
}

# 2 - SWITCH - Uma alternativa ao IF

$nome = 'joão';

switch ($nome) {
    case 'joão':
        //codigo 1
        break;
    case 'ana':
        //codigo 2
        break;
    default:
        //codigo 3
        break;
}

switch ($nome) {
    case 'joão':
        echo '1';
        break;
    case 'ana':
        echo '2';
        break;
    default:
        echo 'Outra coisa qualquer';
        break;
}

# Sintaxe Alternativa

//normal

$valor = 5;
if ($valor == 10) {
    //codigo 1
} else {
    //codigo 2
}

//outras alternativas de usa IF e SWITCH

if ($valor == 10) :
// codigo 1
else :
//codigo 2
endif;

//switch
switch ($variable):
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
endswitch;

//Exemplo

?>

<?php if (true) : ?>
<div>Executar este código HTML</div>
<?php else : ?>
<h3>Executar aqui</h3>
<?php endif; ?>