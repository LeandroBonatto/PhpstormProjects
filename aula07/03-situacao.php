<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 07 - Ex 03 - Situacao</title>
    <style>
        body {
            font-family: "Segoe UI";
            font-size: larger;
        }
    </style>
</head>
<body>
<?php
    $nota1 = "5";
    $nota2 = "7";
    $m = ($nota1 + $nota2) / 2;
    echo "A media entre $nota1 + $nota2 e $m <br/>";
    echo "A situacao do aluno e ". (($m<6)?"REPROVADO":"APROVADO");

?>
</body>
</html>