<?php

/**
 * STRINGS
 * ======================================================
 * Uma string é uma serie de caractere que podem ser guardadeso numa variavel.
 * Podemos definir uma string como sendo um conjunto de letras, espaços, simbolos e algarismos que
 * normalmente designamos por texto.
 * 
 * Em PHP as strings podem ser delimitadas por:
 * aspas simples ' (single quotes)
 * aspas duplas " (double quotes)
 */

$a = 'Esta é uma string';
$b = "Esta é outra string";

echo $a;
echo '<br>';
echo $b;

echo '<br>';

# Nas PSRx não existe uma orientação definida. Devemos ser conssitentes ao longo do nosso codigo.

echo '<hr>';

/**
 * CONCATENAÇÃO DA STRINGS
 * 
 * É o processo que, através do codigo permite juntar várias strings.
 * Existem dois operadores de concatenação:
 * 
 * .
 * .=
 * 
 */

$a = 'Leandro' . ' ' . 'Reis'; # o ponto liga as diferentes strings
echo $a;

echo '<br>';

$b = 'Leandro';
$b .= ' ' . 'Reis'; # .= faz uma concatenação com o valor que já existe na string
echo $b;

echo '<hr>';

/**
 * DIFERENÇA ENTRE ASPAS SIMPLES E DUPLAS
 * ============================================
 * 
 * Ao contrario das aspas duplas, nas strings com aspas simples as variaveis não são interpretadas 
 * relativamente ao seu valor (Parse)
 * 
 */

$nome = 'Leandro';
$sobrenome = 'Reis';
echo $nomeCompleto1 = "$nome $sobrenome";
echo '<br>';
echo $nomeCompleto2 = '$nome $sobrenome';

echo '<hr>';

/**
 * HEREDOC E NOWDOC (outras formas de delimitação)
 * Apesar de não serem muito comum, podem se usadas para tratamento de maiores blocos de texto.
 * 
 * HEREDOC - Permite fazer o parse de variaveis
 */

$cliente = 'Leandro Reis';
$email = 'leansdr@hotmail.com';

$texto = <<<LABEL
 Olá, sr. $cliente.
 Serve a presente mensagem para informar que se encontra inscrito no proximo concurso.<br>
 Enviamos o regulamneto para o seu email $email.
 Obrigado pela sua simpatia.
 LABEL;

echo $texto;

echo '<hr>';

# NOWDOC - Não permite parse de variaveis

$texto = <<<'LABEL'
 Olá, sr. $cliente.
 Serve a presente mensagem para informar que se encontra inscrito no proximo concurso.<br>
 Enviamos o regulamneto para o seu email $email.
 Obrigado pela sua simpatia.
 LABEL;

echo $texto;

echo '<hr>';

/**
 * CARACTERES DE ESCAPE - \
 */

echo '<p>Este é um parágrafo de HTML</p>';
echo '<br>';

/**
 * Os caracteres de escape são usados par escrever caracteres especiais,
 * como é o caso de alguns simbolos que podem entrar em conflito com o codigo.
 */

//$frase_1 = 'I'm going to John's Party!';
$frase_2 = "I'm going to John's party";

//$frase_3 = "I'm not sure John "The Great" will win this fight";

# a \ é o simbolo para definir um caracter de escape

$frase_1 = 'I\'m going to John\'s Party!';

$frase_3 = 'I\'m not sure John "The great" will win this fight';
$frase_3 = "I'm not sure John \"The great\"will win this fight";

/**
 * No PHP 7 foi introduzido o caracter de escape Unicode.
 * Permite apresentar caracteres a partir do seu codigo hexadecimal
 * 
 * https://www.utf8-chartable.de/
 * 
 */

echo "\u{A9}"; # copyright
echo "\u{BC}"; # 1/4
echo "\u{AE}"; # Registered Trademark

# com HTML entities
# https://dev.w3.org/html5/html-author/charref

echo '<br>';
echo '&copy';
echo '&frac14';
echo '&reg;';

die();