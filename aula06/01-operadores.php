<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 06 - Operadores</title>
    <style>
        body {
        font: bold;
        font-family: Arial;
        font-size: large;
        }
    </style>
</head>
<body>
<?php
    $preco = "1250";
    echo "O preco do produto e R$ " . number_format($preco, 2);
    $preco += $preco*10/100;
    echo "<br/>E o novo preco com 10% de aumento sera R$ " . number_format($preco, 2);
?>
</body>
</html>