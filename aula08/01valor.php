<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 08 - Ex 01 - Valor formulario</title>
    <style>
        div {
            font-family: Arial;
            font-size: larger;
        }
    </style>
</head>
<body>
<div>
    <?php
        $valor = $_GET ["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor e igual a " . number_format($rq, 2);
    ?>
    <br>
    <a href="01-exercicio.php">Voltar</a>
</div>
</body>
</html>