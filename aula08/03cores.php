<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Aula 08 - Ex 03 - Cores</title>
<style>
    span.texto {
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor; ?>;
    }
</style>
</head>
<body>
<div>
<?php
    $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    echo "<span class='Texto'>$txt</span>";
?>
</div>
</body>
</html>