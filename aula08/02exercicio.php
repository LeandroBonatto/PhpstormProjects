<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 08 - Ex 02</title>
    <style>
        div {
            font-family: Arial;
            font-size: larger;
        }
    </style>
</head>
<body>
<div>
    <form method="get" action="02idade.php">
        nome: <input type="text" name="nome"/><br/>
        ano de nascimento: <input type="number" name="ano"/><br/>
        <fieldset><legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" value="homem"/>
            <label for="masc">masculino</label><br/>
            <input type="radio" name="sexo" id="fem" value="mulher"/>
            <label for="fem">feminino</label>
        </fieldset><br/>
        <input type="submit" value="Enviar"/>
    </form>

</div>
</body>
</html>