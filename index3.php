<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/jogo.css">
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
    if(isset($_GET['naipe']))
       $naipe = $_GET['naipe'];
   
    $num = isset($_GET['num']) ? $_GET['num'] : 0;

    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";

    // $Jogador = mostrarCartas($Jogador, $naipe);
    $Computador = sortearC($num);

    $h1 = isset($_POST['h1']) ? $_POST['h1'] : 0;
    $h2 = isset($_POST['h2']) ? $_POST['h2'] : 0;
    $h3 = isset($_POST['h3']) ? $_POST['h3'] : 0;
    $h4 = isset($_POST['h4']) ? $_POST['h4'] : 0;
    $h5 = isset($_POST['h5']) ? $_POST['h5'] : 0;
    $h6 = isset($_POST['h6']) ? $_POST['h6'] : 0;
    ?> 
</head>
<body>
    <!-- <audio autoplay="autoplay">
      <source src="songs/alice-in-dark-wonderland-123894.mp3" type="audio/mp3">
      seu navegador não suporta HTML5
    </audio> -->

    <div id = "seletor">
        <center>
        <div id = "result">
            <?php    
                if ($acao == "jogar") {
                    
                    echo "<img src='img/fim.jpg' style='width: 100%; height: 15em;'>";
                    echo "<p id = 'player'>$jogador </p><br>" ;
                
                    if ($h1 != 0)
                        echo "<img src='img/".$naipe,$h1.".png'>";
                    if ($h2 != 0)
                        echo "<img src='img/".$naipe,$h2.".png'>";
                    if ($h3 != 0)
                        echo "<img src='img/".$naipe,$h3.".png'>";
                    if ($h4 != 0)
                        echo "<img src='img/".$naipe,$h4.".png'>";
                    if ($h5 != 0)
                        echo "<img src='img/".$naipe,$h5.".png'>";
                    if ($h6 != 0)
                        echo "<img src='img/".$naipe,$h6.".png'>";
                    // else
                    //     mostrarCartas($Jogador, $naipe);


                    echo "<br><br> <p id = 'player'>Computador </p><br>";
                        mostrarCartasC($Computador, $naipe);
                    
                    echo "<br><br>";

                    echo "<p id = 'player'>Total - Jogador: </p>";
                        echo "<p id = 'player'>".somarCartas($h1, $h2, $h3, $h4, $h5, $h6)."</p>";
                    
                        // echo "<br>";

                    echo "<p id = 'player'>Total - Computador: </p>";
                        echo "<p id = 'player'>". somarCartasC($Computador, $num). "</p>";

                        echo "<br>"; 

                    if (somarCartas($h1, $h2, $h3, $h4, $h5, $h6) > somarCartasC($Computador, $num)) {
                        echo "<h1>$jogador é o(a) vencedor(a)!!</h1>";
                    }
                    elseif (somarCartasC($Computador, $num) > somarCartas($h1, $h2, $h3, $h4, $h5, $h6)) {
                        echo "<h1>O Computador é o vencedor!!</h1>";
                    }
                    elseif (somarCartas($h1, $h2, $h3, $h4, $h5, $h6) == somarCartasC($Computador, $num)) {
                        echo "<h1>Empate!!</h1>";
                    }
                }
            ?>
            <a href="index2.php?nome=<?php echo $jogador;?>"><img src="img/novamente.svg" alt="" id = "back"></a>
        </div>
        </center> 
    </div>
</body>
</html>
