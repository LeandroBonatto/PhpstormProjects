<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 06 - Variaveis</title>
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
    $x = "abc";
    $$x = "def";
    echo "O conteudo da variavel X e $x";
    echo "<br/>A variavel criada recebeu o valor $abc";
?>
</body>
</html>