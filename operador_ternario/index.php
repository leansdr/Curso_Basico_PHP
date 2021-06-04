<?php

/** *
 * 
 * OPERADOR TERNARIO
 * 
 * É um operador condicional que pode substituir uma estrutura simples IF ELSE
 * O operador necessita de 3 expressoes ou area:
 * 
 * 1. a expressão que será avaliada como verdadeira
 * 2. a expressão que será executada como true
 * 3. a expressão que será executada como false
 * 
 */

$opcao = 0;

$nome = $opcao == 1 ? 'João' : 'Antonio';

# Podemos também usar da seguinte forma:

$opcao == 1 ? $nome = 'João' : $nome = 'Antonio';

/***
 * Podemos usar o operador ternario em varias situações distintas.
 * Por exemplo, para apresentar um determinado texto.
 */

echo $opcao == 1 ? 'SIM' : 'NÃO';

?>

<!---Com instrução condicional IF-->

<?php if ($opcao == 1) : ?>
<h2>SIM</h2>
<?php else : ?>
<h2>NÃO</h2>
<?php endif; ?>

<!--Com operador ternario-->

<h2><?php $opcao == 1 ? 'SIM' : 'NÃO' ?></h2>

<!--Por exemplo, para controlar o CSS-->

<h2 style="color:<?= $opcao == 1 ? 'red' : 'blue' ?>">Este texto tem cor definida pelo PHP</h2>