<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Funcoes Artimeticas em PHP</title>
    <style>
        h2 {
            font: 12pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div>
<?php
    $v1 = 4;
    $v2 = 3;
    echo "<h2>Valores recebidos: $v1 e $v2</h2>";
    echo "O valor absoluto de $v2 e " . abs($v2);
    echo "<br>O valor de $v1<Sup>$v2</Sup> e " . pow($v1, $v2);
    echo "<br>A raiz quadrada de $v1 e " . sqrt($v1);
    echo "<br>O valor de $v2 arredondado e " . round ($v2); // Ceil (Essa funcao arredonda pra cima - floor (essa pra baixo)
    echo "<br>A parte inteira de $v2 e " . intval($v2);
    echo "<br>O valor de $v1 em moeda e R$ " . number_format($v1,2, ",",".");
?>
</div>
</body>
</html>