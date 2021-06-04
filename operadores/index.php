<?php

/**
 * OPERADORES
 * ======================
 * São símbolos que permitem executar operações matemáticas ou
 * operações lógicas e comparativas
 * 
 */

# OPERADOR DE ATRIBUICAO (=) (assignmet)
$variavel = 100;

$variavel = "João";

#-----------------------------------------------

/**
 * OPERADORES ARITMETICOS (para execução de cálculos)
 * 
 */

$x = 4 + 2; # Adição
$x = 4 - 2; # Subtração  
$x = 4 * 2; # Multiplicacao
$x = 4 / 2; # Divisão
$x = 4 % 2; # Modulus (restante da divisão)  Ver arquivo d.php;


$x = 100 % 3; # resultado = 33.3 / resto = 1
$x = 60 % 3;  # resultado = 20 / resto = 0
$x = 13 % 2;  # resultado = 6.5 / resto = 1


//echo 3462 / 7;
//echo '<br>';
//echo 3462 % 7;

/**
 * Exemplos do operador de atribuição e Matemaricos
 */

$a = 10;
$b = 20;

$f = $g = $h = 100; # As variaveis F G H irão receber o valor de 100

$resultado = $a + $b;   #30
$resultado = $a + 100;  #110
$resultado = $a * $b;   #200

$resultado = 1000 + $a + 10 + $b;

/**
 * Desde o PHP 5.6 existe o expoente que permite calcular a potência
 */

$x = 4 ** 2;
//echo $x; # valor exibido é 16

#--------------------------------------------------------------

/**
 * OPERADORES DE ATRIBUIÇÃO COMBINADOS COM ARITMETICOS
 * Permitem alterar o valor de uma variavel, a partir do seu valor original
 */

$a = 10; #valor original

$a = $a + 20; # 30
$a = $a - 3;  # 7
$a = $a * 2;  # 20
$a = $a / 2;  # 5

# Simplificando o exemplo acima:

$a += 20;  # 30
$a -= 3;   # 7
$a *= 2;   # 20
$a /= 2;   # 5

#--------------------------------------------------------------------

/**
 * OPERADORES DE INCREMENTO E DECREMENTO
 * Adiciona ou subtraem uma unidade a variavel;
 */

$a = 1;

$a++; # $a = $a + 1;
$a--; # $a = $a - 1;

# Os operadores podem ser de pré-incremento ou pós-incremento.
# O mesmo acontece para o decremento

$a = 10;

$a++;
++$a;

$a--;
--$a;

/**
 * Exemplos de Pré-incremento e pós-incremento
 * Tirar o comentário e rodar no browse
 */

/**
 *
 * 
 * $a = 100;
 *print '$a = ' . $a;
 *echo '<br>';
 *print '$a-- => ' . $a--;
 *echo '<br>';
 *print '$a = ' . $a;

 *print '<hr>';

 *$a = 100;
 *print '$a = ' . $a;
 *echo '<br>';
 *print '--$a => ' . --$a;
 *echo '<br>';
 *print '$a = ' . $a;
 *echo '<br>';

 *print '<hr>';

 *$a = 100;
 *print '$a = ' . $a;
 *echo '<br>';
 *print '$b = --$a ';
 *echo '<br>';
 *print '$b = ' . --$a;
 *echo '<br>';
 *print '$a = ' . $a;
 */

/**
 * OPERADORES LOGICOS - AND(&&) - 0R(||) 
 * ==========================
 * Os operadores lógicos são frequentemente usados com os operadores de comparação
 * Eles permitem ´ligar´ várias comparaçoes avaliando se são verdadeiras ou falsas
 * 
 * No PHP a construção correta de instruções condicionais depende destes operadores
 * (instrução condicionais verifica se uma situação é verdadeira(true) ou falsa (false))
 * 
 * Exemplos:
 * 
 * 1)
 * 
 * $a = 100;
 * $b = 200;

 * $x = ($a < $b) && ($a < 1000); #AND -> TRUE
 * $x = ($a > $b) || ($a > 1000);   #OR  -> FALSE
 * $x = ($a < 150) && ($b > 300);   # false
 * $x = ($a > 10) || ($b > 500);      #true
 * $x = ($a == 100) && ($b < $a);     #false 
 * 
 */


$x = (10 > 5) && (20 > 30);
$x = (true && false); # false

$x = (2 > 1) && (3 > 2);
$x = (true && true); # true

$x = (2 < 4) || (4 > 10);
$x = (true || false); # true 

$x = (2 == 3) || (3 > 1);
$x = (false || true); # true