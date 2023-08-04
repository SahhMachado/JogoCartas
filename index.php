<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Jogo de Cartas</title>
    <style>
        body{
          background-image: url("img/inicio.webp");
          background-repeat: no-repeat;
          background-size: cover;
          backdrop-filter: blur(2px);
        }
    </style>
    <?php
      $jogador = isset($_GET['nome']) ? $_GET['nome'] : "";

      $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    ?>
</head>
<body>
  <audio autoplay="autoplay">
    <source src="songs/alice-in-dark-wonderland-123894.mp3" type="audio/mp3">
    seu navegador não suporta HTML5
  </audio>


  <div id = "intro">
    <p id = "h1">Bem Vindo(a)!</p>
    <br>
    <p id = "h3">Preencha o campo abaixo <br>
      para continuar.
    </p>
  </div>

    <form action="index2.php" method="get">  
      <div id = "input">
        <input type = "text" name = "nome" id = "nome" required placeholder = "Insira seu nome aqui" 
        value="<?php if ($acao == "voltar") echo $jogador ;?>">
        <button type="submit" name="acao" id="acao" value="continua">Continuar</button>
      </div>
    </form>
</body>
</html>