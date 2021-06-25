<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Cartas Simples</title>
</head>
<body>
    <h2>Jogador:</h2>
    <?php
    echo $_POST['nome'];
    echo "<br>";

    $cartas = "";
    if(isset($_POST['cartas']))
        $cartas = $_POST['cartas'];

    $naipe = "";
    if(isset($_POST['naipe']))
        $naipe = $_POST['naipe'];

    $Jogador = array();
    for($i = 0; $i < $cartas; $i++){
    }
    ?>
</body>
</html>