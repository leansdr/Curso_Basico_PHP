<?php

$nome = 'Leandro';
$apelido = 'Soares dos Réis';
$nomeCompleto = $nome . ' ' . $apelido;
$totalCaracter = mb_strlen($nomeCompleto);

/**
 * a Funçao strlen conta as letras acentuadas como 2 caracteres aumentando a quantidade de letras da string. Exemplo: escreva RÉIS com acento
 *  A mb_ retira esta quantidade com letras acentuadas - C:\laragon\www> php -m
 */

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>

<body>

    <p> <?php echo $nomeCompleto ?> </p>
    <p>O meu nome tem <?php echo $totalCaracter ?> caracteres.</p>

</body>

</html>