<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Jogo de Cartas Simples</title>
</head>
     <style>
        img{
            height: 60px;
            width: 50px;
        }
     </style>
<body>
    <?php
    function sortear($num){
        $Jogador = array();

        for($i = 0; $i < $num; $i++){
            $n = rand(1,13);
            $Jogador[] = $n;
        }

    sort($Jogador);
    return $Jogador;   
    }

    function sortearC($num){
        $Computador = array();
        
        for($i = 0; $i < $num; $i++){
            $n = rand(1,13);
            $Computador[] = $n;
        }

    sort($Computador);
    return $Computador;   
    }

    function mostrarCartas($Jogador, $naipe){
        if ($naipe == "ouro") {
            echo "<p id='player'> Ouros <br></p>";
        }
        if ($naipe == "copas") {
            echo "<p id='player'> Copas <br></p>";
        }
        if ($naipe == "paus") {
            echo "<p id='player'> Paus <br></p>";
        }
        if ($naipe == "espadas") {
            echo "<p id='player'> Espadas <br></p>";
        }
        foreach($Jogador as $c){
            for ($cards = 0; $cards < 14; $cards++) { 
                if ($naipe == "ouro" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }
                elseif($naipe == "copas" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }
                elseif($naipe == "paus" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }
                elseif($naipe == "espadas" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }    
            }
        }
    }

    function mostrarCartasC($Computador, $naipe){
        foreach($Computador as $c){
            for ($cards = 0; $cards < 14; $cards++) { 
                if ($naipe == "ouro" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }
                elseif($naipe == "copas" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }
                elseif($naipe == "paus" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }
                elseif($naipe == "espadas" and $c == $cards) {
                    echo "<img src='img/".$naipe,$cards.".png'> \n";
                }    
            }
        }
    } 
   
    function somarCartas($h1, $h2, $h3, $h4, $h5, $h6){
        $soma = $h1 + $h2 + $h3 + $h4 + $h5 + $h6;

        return $soma;
    }

    function somarCartasC($Computador, $num){
            $somaC = 0;
            for ($i=0; $i < $num; $i++) {
                $somaC += $Computador[$i];
            }
            return $somaC;
        }
    ?>
</body>
</html>