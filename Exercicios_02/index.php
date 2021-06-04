<?php

// Definição de Variaveis
$nome = 'Leandro';
$apelido = 'Soares dos Reis';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!--
    Exercicio 01
    1. Crie um script index.php;
    2. Defina duas variaveis: O seu nome e o seu apelido;
    3. Numa estrutura básica de HTML, apresenta um tiitulo estático do tipo h3 
       com o texto "O meu nome é:";
    4. Apresenta numa tag h1 o nome completo a partir das variaveis inicidas no ponto 2; 
-->

<body>

    <h3>Meu nome é :</h3>

    <h1><?= $nome . ' ' . $apelido ?></h1>

    <h1><?php echo $nome . ' ' . $apelido ?></h1>

    <h1><?= "$nome $apelido" ?></h1>

</body>

</html>