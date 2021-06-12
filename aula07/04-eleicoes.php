<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 07 - Ex 04 - Eleicoes</title>
</head>
<style>
    body {
        font-family: "Segoe UI";
        font-size: larger;
    }
</style>
<body>
<?php
    $ano = "1920";
    $idade = 2014 - $ano;
    echo "Quem nasceu em $ano tem idade de $idade anos.";
    $tipo = ($idade>=18 && $idade<65)?"OBRIGATORIO":"NAO OBRIGATORIO";
    echo " E dessa forma seu voto e $tipo.";
?>
</body>
</html>