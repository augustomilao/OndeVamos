<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Onde Vamos?</title>
</head>
<body>
<div class="centro">
    <h1>Amooor, Onde vamos hoje?</h1>
    <button onClick="window.location.reload()" class="botão">Vamos ver, amor</button>

    <h1><?php echo("Que tal ". $nome . "?") ?></h1>
</div>



</body>
</html>