<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 7 - Ex 02 - Igual Identico</title>
    <style>
        body {
            font-family: "Segoe UI";
            font-size: larger;
        }
    </style>
</head>
<body>
<?php
    $a = 3;
    $b = "3";
    $r = ($a === $b) ? "Sim" : "Nao";
    echo "As variaveis A e B sao identicas? $r";
?>
</body>
</html>