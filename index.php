<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Cartas</title>
    <style>
       body {
          background-color: #99f2b1;
           font-family: 'Verdana';
       }
       input{
           background-color: #57ad6e;
      }
       button{
        background-color: #57ad6e;
        font-family: 'Verdana';
       }
       form{
           padding-top: 50px;
           padding-left: 550px;
       }
       select{
        background-color: #57ad6e;
        font-family: 'Verdana';
       }
       </style>
    <?php 
    include_once 'cartas.php';
    $jogador = "";
    if(isset($_POST['nome']))
       $jogador = $_POST['nome'];

    $naipe = "";
    if(isset($_POST['naipe']))
       $naipe = $_POST['naipe'];
   
    $num = isset($_POST['num']) ? $_POST['num'] : 0;

    $acao = isset($_POST['acao']) ? $_POST['acao'] : "";

    $Jogador = sortear($num);
    ?> 
</head>
<body>
    <form action="" method="post">
    Jogador: <input type="text" name="nome" id="nome" value="<?php echo $jogador ?>"><br><br>
    
    <input type="radio" id="ouros" name="naipe" value="1 
       <?php if ($naipe == 1) echo 'checked';?>">Ouros <br>
    <input type="radio" id="copas" name="naipe" value="2" 
       <?php if ($naipe == 2) echo 'checked';?>>Copas <br>
    <input type="radio" id="paus" name="naipe" value="3 
       <?php if ($naipe == 3) echo 'checked';?>">Paus <br>
    <input type="radio" id="espadas" name="naipe" value="4
       <?php if ($naipe == 4) echo 'checked';?>">Espadas <br><br>

    Número de cartas desejado: <br>
    <select name="num" id="num">
    <option value="2" <?php if ($num == 2) echo 'selected'; ?>>2</option>
    <option value="3" <?php if ($num == 3) echo 'selected'; ?>>3</option>
    <option value="4" <?php if ($num == 4) echo 'selected'; ?>>4</option>
    <option value="5" <?php if ($num == 5) echo 'selected'; ?>>5</option>
    <option value="6" <?php if ($num == 6) echo 'selected'; ?>>6</option>
    </select><br><br>
    <?php
    echo "$jogador: <br>" ;
    for ($i=0; $i < $num; $i++) { 
        echo "<input type='hidden' name='h".($i+1)."' value='".$Jogador[$i]."'>";
     }
    ?>
    
    <button type="submit" name="acao" id="acao" value="sortear">Sortear</button>
    <button type="submit" name="acao" id="acao" value="jogar">Jogar</button>
    </form>
    <?php
    if ($acao == "jogar") {
         
    }elseif ($acao == "sortear") {
        mostrarCartas($Jogador, $naipe);
    }
    ?>
</body>
</html>