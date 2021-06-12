<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 09 - Ex 01</title>
    <style>
        div {
            font: larger;
            font-family: "Arial";
        }
    </style>
</head>
<body>
<?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date ("Y") - $a;
    echo "Voce nasceu em $a e tera $i anos. <br/>";
    if ($i >= 18) {
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }
    else {
        $v = "nao pode votar";
        $d = "nao pode dirigir";
    }
    echo "Com essa idade voce $v e tambem $d";
?>
</body>
</html>