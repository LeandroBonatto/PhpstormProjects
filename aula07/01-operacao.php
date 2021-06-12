<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 07 - Operacao</title>
    <style>
        body {
            font-family: "Segoe UI";
            font-size: larger;
        }

    </style>
</head>
<body>
<?php
    $n1 = "5";
    $n2 = "3";
    $tipo = "op";
    echo "Os valores passados foram $n1 e $n2 <br/>";
    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo "O resultado sera $r";

?>
</body>
</html>