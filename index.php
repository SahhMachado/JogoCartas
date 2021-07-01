<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cartas.css">
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
    $Computador = sortearC($num);
    ?> 
</head>
<body>
    <form action="" method="post">
    Jogador: <input type="text" name="nome" id="nome" required value="<?php echo $jogador ?>"><br><br>

   <label for="naipe">Naipe:</label><br>
  <input type="radio" name="naipe" id="naipe" value="1" 
        <?php if ($naipe == 1) echo 'checked'; ?>>Ouro<br>
  <input type="radio" name="naipe" id="naipe" value="2" 
        <?php if ($naipe == 2) echo 'checked'; ?>>Copas<br>
  <input type="radio" name="naipe" id="naipe" value="3" 
        <?php if ($naipe == 3) echo 'checked'; ?>>Paus<br>
  <input type="radio" name="naipe" id="naipe" value="4" 
        <?php if ($naipe == 4) echo 'checked'; ?>>Espadas<br><br>

    <label for="num">Número de cartas:</label><br>
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
    </form><br>
    <center>
    <?php
    if ($acao == "jogar") {
        echo "<b>$jogador: </b><br>";
        $h1 = isset($_POST['h1']) ? $_POST['h1'] : 0;
        $h2 = isset($_POST['h2']) ? $_POST['h2'] : 0;
        $h3 = isset($_POST['h3']) ? $_POST['h3'] : 0;
        $h4 = isset($_POST['h4']) ? $_POST['h4'] : 0;
        $h5 = isset($_POST['h5']) ? $_POST['h5'] : 0;
        $h6 = isset($_POST['h6']) ? $_POST['h6'] : 0;
  
        if ($h1 != 0)
          echo "Carta 1: ".$h1."<br>";
        if ($h2 != 0)
          echo "Carta 2: ".$h2."<br>";
        if ($h3 != 0)
          echo "Carta 3: ".$h3."<br>";
        if ($h4 != 0)
          echo "Carta 4: ".$h4."<br>";
        if ($h5 != 0)
          echo "Carta 5: ".$h5."<br>";
        if ($h6 != 0)
          echo "Carta 6: ".$h6."<br>";


        echo '<b>Computador: </b><br>';
        mostrarCartasC($Computador, $naipe);
        echo "<br><br>";

        echo "<b>Total jogador: </b>";
        echo somarCartas($h1, $h2, $h3, $h4, $h5, $h6);
        echo "<br>";

        echo "<b>Total computador: </b>";
        echo somarCartasC($Computador, $num);

        if (somarCartas($h1, $h2, $h3, $h4, $h5, $h6) > somarCartasC($Computador, $num)) {
           echo "<h2>$jogador É O VENCEDOR!!</h2>";
        }elseif (somarCartasC($Computador, $num) > somarCartas($h1, $h2, $h3, $h4, $h5, $h6)) {
           echo "<h1>COMPUTADOR É O VENCEDOR!!</h1>";
        }elseif (somarCartas($h1, $h2, $h3, $h4, $h5, $h6) == somarCartasC($Computador, $num)) {
           echo "<h3>EMPATE!!</h3>";
        }
    }elseif ($acao == "sortear") {
        mostrarCartas($Jogador, $naipe);
    }
    ?>
</body>
</html>