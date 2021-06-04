<?php

#Podemos comparar strings da seguinte forma:
$a = 'João';
$b = 'Carlos';

$c = ($a == $b); // false
$c = ($a != $b); // true

# Existem muitas funções nativas do PHP para operar com strings.

# Exemplos

$frase = 'Esta frase tem 29 caracteres.';

# retorna o numero de caracteres da string
$numero_caracteres_total = strlen($frase);

# retorna as letras a partir da posição 0 e durante 4 caracteres
$primeira_palavra = substr($frase, 0, 4);

# converte toda a string em letras maiusculas
$todas_maiusculas = strtoupper($frase);

# converte toda a string em letras minusculas
$todas_minusculas = strtolower($frase);

# substitui uma letra por outra
$nova_frase = str_replace('a', 'x', $frase); # Estx frxse tem 29 cxrxcteres 

# verifica qual a posicao de um caracter dentro da string
$posicao = strpos($frase, 'a'); # 3

// https://www.php.net/manual/pt_BR/ref.strings.php

# No PHP 8 foram introduzidas mais algumas funções para usar com strings

#str_contains() // função que verifica se contem determinada palavra
$nome = "Leandro Soares dos Reis";
$x = str_contains($nome, 'Reis'); # true 

#str_starts_with() // função que verifica com que palavra inicia a string
$x = str_starts_with($nome, 'Leandro'); # true
$y = str_starts_with($nome, 'leandro'); # false

#str_ends_with() // funcao que verifica com que palavra termina a string
$z = str_ends_with($nome, 'eis'); # true
$w = str_ends_with($nome, '  eis'); # false