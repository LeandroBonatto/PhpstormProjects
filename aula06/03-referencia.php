<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 06 - Referencia</title>
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
    $a = 3;
    $b = $a;
    $b += 5;
    echo "A variavel A vale $a";
    echo "<br/>A variavel B vale $b";
?>
</body>
</html>