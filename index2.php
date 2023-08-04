<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cards.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Jogo de Cartas</title>
    <style>
        body{
          background-image: url("img/fundo.jpg");
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
        }
    </style>

    <?php 
    include_once 'cartas.php';
    $jogador = "";
    if(isset($_GET['nome']))
       $jogador = $_GET['nome'];

    $naipe = "";
    if(isset($_POST['naipe']))
       $naipe = $_POST['naipe'];
   
    $num = isset($_POST['num']) ? $_POST['num'] : 0;

    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";

    $Jogador = sortear($num);
    $Computador = sortearC($num);
    ?> 
</head>
<body>
    <!-- <audio autoplay="autoplay">
      <source src="songs/alice-in-dark-wonderland-123894.mp3" type="audio/mp3">
      seu navegador não suporta HTML5
    </audio> -->    
    <div id = "seletor">
      <form action="" method="post">
            <label for="naipe">Naipe:</label><br><br>
            <div id = "opc">
                <input type="radio" required name="naipe" id="naipe" value="ouro" 
                      <?php if ($naipe == "ouro") echo 'checked';?>>  Ouro<br>
                <input type="radio" required name="naipe" id="naipe" value="copas" 
                      <?php if ($naipe == "copas") echo 'checked';?>>  Copas<br>
                <input type="radio" required name="naipe" id="naipe" value="paus" 
                      <?php if ($naipe == "paus") echo 'checked';?>>  Paus<br>
                <input type="radio" required  name="naipe" id="naipe" value="espadas" 
                      <?php if ($naipe == "espadas") echo 'checked';?>>  Espadas<br><br>
            </div>
          
              <label for="num">Número de cartas:</label><br><br>
              <select name="num" id="num">
                <option value="2" <?php if ($num == 2) echo 'selected';?>>2</option>
                <option value="3" <?php if ($num == 3) echo 'selected';?>>3</option>
                <option value="4" <?php if ($num == 4) echo 'selected';?>>4</option>
                <option value="5" <?php if ($num == 5) echo 'selected';?>>5</option>
                <option value="6" <?php if ($num == 6) echo 'selected';?>>6</option>
              </select><br><br>
          
                <button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
          </form>

          <form action="index3.php?acao=jogar&nome=<?php echo $jogador;?>&naipe=<?php echo $naipe;?>&num=<?php echo $num?>" 
          method = "post" id = "jogo">
          <?php
            for ($i=0; $i < $num; $i++) { 
              echo "<input type='hidden' name='h".($i+1)."' value='".$Jogador[$i]."'>";
            }
          ?>
                <button type="submit" name="acao" id="acao" value="jogar">Jogar</button>
          </form><br>

        <center>
        <?php
          echo "<p id = 'player'>$jogador </p><br>" ;
    
          if ($acao == "sortear") {
            mostrarCartas($Jogador, $naipe);
          }
        ?> 
        </center> 
        <a href="index.php?acao=voltar&nome=<?php echo $jogador;?>"><img src="img/seta.svg" alt="" id = "back"></a>
  </div>
</body>
</html>