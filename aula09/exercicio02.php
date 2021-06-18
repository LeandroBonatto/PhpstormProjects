<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 09 - Ex 02</title>
    <style>
        div {
            font: larger;
            font-family: "Arial";
        }
    </style>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date ("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos. <br/>";
        if ($i < 16) {
            $tipoVoto = "nao vota";
        }
        else {
            if ($i >= 16 && $i < 18) {
                $tipoVoto = "voto opcional";
            }
            else {
                $tipoVoto = "voto obrigatorio";
            }
        }
        echo "Para essa idade, $tipoVoto";

    ?>
</div>
</body>
</html>