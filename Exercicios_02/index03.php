<?php

$nome = 'joão';
$apelido = 'ribeiro';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>

<body>
    <!--
    1. Crie um arquivo index.php
    2. Defina duas variaveis: nome e apelido (ambas com letras minusculas)
    3. Numa pagina HTML simples, apresente o seguinte texto dentro de um paragrafo:
    O meu nome é NOME e o meu apelido é APELIDO

    a função mb_ não esta ativada no php 8
-->

    <p style="color:red" ;>
        <?php echo "O meu nome é " . strtoupper($nome) . " e o meu apelido é " . strtoupper($apelido) ?>
    </p>
    <p style="color:blue" ;>
        <?php echo "O meu nome é " . mb_strtoupper($nome) . " e o meu apelido é " . strtoupper($apelido) ?>
    </p>
</body>

</html>