<?php

$opcao = 0;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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

</body>

</html>