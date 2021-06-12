<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 08 - Ex 02 - Idade</title>
    <style>
        body {
            font-family: Arial;
            font-size: larger;
        }
    </style>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:0;
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
        $idade = date ("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos.";
    ?>
       <br>
        <a href="02exercicio.php">Voltar</a>
</body>
</html>