<?php

/**
 * 'a' é igual a 1000 e 'b' é igual a metade de 'a'
 * apresentar o valor de 'b'
 */

$a = 1000;
$b = $a / 2;
echo $b;

print '<hr>';

/**
 * 'c' é igual a 100 e 'd' é igual a 3 vezes o valor de 'c'
 * apresentar o valor de 'b'
 */

$c = 100;
$d = $c * 3;
echo $d;

print '<hr>';

/**
 * 'e' é iniciado e apresentado com o valor 20
 * na instrução seguinte, 'e' deverá ser apresentado com o valor 21
 */

//$e = 20;
//echo $e++;
//echo '<br>';
//echo $e;

#ou

echo $e = 20;
echo '<br>';
echo ++$e;

print '<hr>';

/**
 * 'f' é igua a 100
 * 'g' é igual a 250
 * 'h' é igual a 'f' + 'g'
 * acrescentar mais uma unidade a 'h'
 * apresentar 'h'
 */

// $f = 100;
// $g = 250;
// $h = $f + $g;
// echo $h;
// echo '<br>';
// $h++;
// echo $h;

// $f = 100;
// $g = 250;
// $h = $f + $g + 1;
// echo $h;

$f = 100;
$g = 250;
echo $h = $f + $g + 1;