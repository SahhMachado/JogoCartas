<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Cartas Simples</title>
</head>
     <style>
        img{
            width: 70px;
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
        if ($naipe == 1) {
            echo "Ouros <br>";
        }
        if ($naipe ==2) {
            echo "Copas <br>";
        }
        if ($naipe == 3) {
            echo "Paus <br>";
        }
        if ($naipe == 4) {
            echo "Espadas <br>";
        }
        foreach($Jogador as $c){
            if ($naipe == 1 and $c == 1) {
                echo "<img src='img/ouro1.png'> \n";
            }elseif($naipe == 1 and $c == 2) {
                echo "<img src='img/ouro2.png'> \n";
            }elseif($naipe == 1 and $c == 3) {
                echo "<img src='img/ouro3.png'> \n";
            }elseif($naipe == 1 and $c == 4) {
                echo "<img src='img/ouro4.png'> \n";
            }elseif($naipe == 1 and $c == 5) {
                echo "<img src='img/ouro5.png'> \n";
            }elseif($naipe == 1 and $c == 6) {
                echo "<img src='img/ouro6.png'> \n";
            }elseif($naipe == 1 and $c == 7) {
                echo "<img src='img/ouro7.png'> \n";
            }elseif($naipe == 1 and $c == 8) {
                echo "<img src='img/ouro8.png'> \n";
            }elseif($naipe == 1 and $c == 9) {
                echo "<img src='img/ouro9.png'> \n";
            }elseif($naipe == 1 and $c == 10) {
                echo "<img src='img/ouro10.png'> \n";
            }elseif($naipe == 1 and $c == 11) {
                echo "<img src='img/ouro11.png'> \n";
            }elseif($naipe == 1 and $c == 12) {
                echo "<img src='img/ouro12.png'> \n";
            }elseif($naipe == 1 and $c == 13) {
                echo "<img src='img/ouro13.png'> \n";
            }elseif ($naipe == 2 and $c == 1) {
                echo "<img src='img/copas1.png'> \n";
            }elseif($naipe == 2 and $c == 2) {
                 echo "<img src='img/copas2.png'> \n";
            }elseif($naipe == 2 and $c == 3) {
                echo "<img src='img/copas3.png'> \n";
            }elseif($naipe == 2 and $c == 4) {
                echo "<img src='img/copas4.png'> \n";
            }elseif($naipe == 2 and $c == 5) {
                echo "<img src='img/copas5.png'> \n";
            }elseif($naipe == 2 and $c == 6) {
                echo "<img src='img/copas6.png'> \n";
            }elseif($naipe == 2 and $c == 7) {
                echo "<img src='img/copas7.png'> \n";
            }elseif($naipe == 2 and $c == 8) {
                echo "<img src='img/copas8.png'> \n";
            }elseif($naipe == 2 and $c == 9) {
                echo "<img src='img/copas9.png'> \n";
            }elseif($naipe == 2 and $c == 10) {
                echo "<img src='img/copas10.png'> \n";
            }elseif($naipe == 2 and $c == 11) {
                echo "<img src='img/copas11.png'> \n";
            }elseif($naipe == 2 and $c == 12) {
                echo "<img src='img/copas12.png'> \n";
            }elseif($naipe == 2 and $c == 13) {
                echo "<img src='img/copas13.png'> \n";
            }elseif ($naipe == 3 and $c == 1) {
                echo "<img src='img/paus1.png'> \n";
            }elseif($naipe == 3 and $c == 2) {
                 echo "<img src='img/paus2.png'> \n";
            }elseif($naipe == 3 and $c == 3) {
                echo "<img src='img/paus3.png'> \n";
            }elseif($naipe == 3 and $c == 4) {
                echo "<img src='img/paus4.png'> \n";
            }elseif($naipe == 3 and $c == 5) {
                echo "<img src='img/paus5.png'> \n";
            }elseif($naipe == 3 and $c == 6) {
                echo "<img src='img/paus6.png'> \n";
            }elseif($naipe == 3 and $c == 7) {
                echo "<img src='img/paus7.png'> \n";
            }elseif($naipe == 3 and $c == 8) {
                echo "<img src='img/paus8.png'> \n";
            }elseif($naipe == 3 and $c == 9) {
                echo "<img src='img/paus9.png'> \n";
            }elseif($naipe == 3 and $c == 10) {
                echo "<img src='img/paus10.png'> \n";
            }elseif($naipe == 3 and $c == 11) {
                echo "<img src='img/paus11.png'> \n";
            }elseif($naipe == 3 and $c == 12) {
                echo "<img src='img/paus12.png'> \n";
            }elseif($naipe == 3 and $c == 13) {
                echo "<img src='img/paus13.png'> \n";
            }elseif ($naipe == 4 and $c == 1) {
                echo "<img src='img/espadas1.png'> \n";
            }elseif($naipe == 4 and $c == 2) {
                 echo "<img src='img/espadas2.png'> \n";
            }elseif($naipe == 4 and $c == 3) {
                echo "<img src='img/espadas3.png'> \n";
            }elseif($naipe == 4 and $c == 4) {
                echo "<img src='img/espadas4.png'> \n";
            }elseif($naipe == 4 and $c == 5) {
                echo "<img src='img/espadas5.png'> \n";
            }elseif($naipe == 4 and $c == 6) {
                echo "<img src='img/espadas6.png'> \n";
            }elseif($naipe == 4 and $c == 7) {
                echo "<img src='img/espadas7.png'> \n";
            }elseif($naipe == 4 and $c == 8) {
                echo "<img src='img/espadas8.png'> \n";
            }elseif($naipe == 4 and $c == 9) {
                echo "<img src='img/espadas9.png'> \n";
            }elseif($naipe == 4 and $c == 10) {
                echo "<img src='img/espadas10.png'> \n";
            }elseif($naipe == 4 and $c == 11) {
                echo "<img src='img/espadas11.png'> \n";
            }elseif($naipe == 4 and $c == 12) {
                echo "<img src='img/espadas12.png'> \n";
            }elseif($naipe == 4 and $c == 13) {
                echo "<img src='img/espadas13.png'> \n";
            }
        }
    }
    function mostrarCartasC($Computador, $naipe){
        foreach($Computador as $c){
            if ($naipe == 1 and $c == 1) {
                echo "<img src='img/paus1.png'> \n";
            }elseif($naipe == 1 and $c == 2) {
                echo "<img src='img/paus2.png'> \n";
            }elseif($naipe == 1 and $c == 3) {
                echo "<img src='img/paus3.png'> \n";
            }elseif($naipe == 1 and $c == 4) {
                echo "<img src='img/paus4.png'> \n";
            }elseif($naipe == 1 and $c == 5) {
                echo "<img src='img/paus5.png'> \n";
            }elseif($naipe == 1 and $c == 6) {
                echo "<img src='img/paus6.png'> \n";
            }elseif($naipe == 1 and $c == 7) {
                echo "<img src='img/paus7.png'> \n";
            }elseif($naipe == 1 and $c == 8) {
                echo "<img src='img/paus8.png'> \n";
            }elseif($naipe == 1 and $c == 9) {
                echo "<img src='img/paus9.png'> \n";
            }elseif($naipe == 1 and $c == 10) {
                echo "<img src='img/paus10.png'> \n";
            }elseif($naipe == 1 and $c == 11) {
                echo "<img src='img/paus11.png'> \n";
            }elseif($naipe == 1 and $c == 12) {
                echo "<img src='img/paus12.png'> \n";
            }elseif($naipe == 1 and $c == 13) {
                echo "<img src='img/paus13.png'> \n";
            }elseif ($naipe == 2 and $c == 1) {
                echo "<img src='img/ouro1.png'> \n";
            }elseif($naipe == 2 and $c == 2) {
                 echo "<img src='img/ouro2.png'> \n";
            }elseif($naipe == 2 and $c == 3) {
                echo "<img src='img/ouro3.png'> \n";
            }elseif($naipe == 2 and $c == 4) {
                echo "<img src='img/ouro4.png'> \n";
            }elseif($naipe == 2 and $c == 5) {
                echo "<img src='img/ouro5.png'> \n";
            }elseif($naipe == 2 and $c == 6) {
                echo "<img src='img/ouro6.png'> \n";
            }elseif($naipe == 2 and $c == 7) {
                echo "<img src='img/ouro7.png'> \n";
            }elseif($naipe == 2 and $c == 8) {
                echo "<img src='img/ouro8.png'> \n";
            }elseif($naipe == 2 and $c == 9) {
                echo "<img src='img/ouro9.png'> \n";
            }elseif($naipe == 2 and $c == 10) {
                echo "<img src='img/ouro10.png'> \n";
            }elseif($naipe == 2 and $c == 11) {
                echo "<img src='img/ouro11.png'> \n";
            }elseif($naipe == 2 and $c == 12) {
                echo "<img src='img/ouro12.png'> \n";
            }elseif($naipe == 2 and $c == 13) {
                echo "<img src='img/ouro13.png'> \n";
            }elseif ($naipe == 3 and $c == 1) {
                echo "<img src='img/espadas1.png'> \n";
            }elseif($naipe == 3 and $c == 2) {
                 echo "<img src='img/espadas2.png'> \n";
            }elseif($naipe == 3 and $c == 3) {
                echo "<img src='img/espadas3.png'> \n";
            }elseif($naipe == 3 and $c == 4) {
                echo "<img src='img/espadas4.png'> \n";
            }elseif($naipe == 3 and $c == 5) {
                echo "<img src='img/espadas5.png'> \n";
            }elseif($naipe == 3 and $c == 6) {
                echo "<img src='img/espadas6.png'> \n";
            }elseif($naipe == 3 and $c == 7) {
                echo "<img src='img/espadas7.png'> \n";
            }elseif($naipe == 3 and $c == 8) {
                echo "<img src='img/espadas8.png'> \n";
            }elseif($naipe == 3 and $c == 9) {
                echo "<img src='img/espadas9.png'> \n";
            }elseif($naipe == 3 and $c == 10) {
                echo "<img src='img/espadas10.png'> \n";
            }elseif($naipe == 3 and $c == 11) {
                echo "<img src='img/espadas11.png'> \n";
            }elseif($naipe == 3 and $c == 12) {
                echo "<img src='img/espadas12.png'> \n";
            }elseif($naipe == 3 and $c == 13) {
                echo "<img src='img/espadas13.png'> \n";
            }elseif ($naipe == 4 and $c == 1) {
                echo "<img src='img/copas1.png'> \n";
            }elseif($naipe == 4 and $c == 2) {
                 echo "<img src='img/copas2.png'> \n";
            }elseif($naipe == 4 and $c == 3) {
                echo "<img src='img/copas3.png'> \n";
            }elseif($naipe == 4 and $c == 4) {
                echo "<img src='img/copas4.png'> \n";
            }elseif($naipe == 4 and $c == 5) {
                echo "<img src='img/copas5.png'> \n";
            }elseif($naipe == 4 and $c == 6) {
                echo "<img src='img/copas6.png'> \n";
            }elseif($naipe == 4 and $c == 7) {
                echo "<img src='img/copas7.png'> \n";
            }elseif($naipe == 4 and $c == 8) {
                echo "<img src='img/copas8.png'> \n";
            }elseif($naipe == 4 and $c == 9) {
                echo "<img src='img/copas9.png'> \n";
            }elseif($naipe == 4 and $c == 10) {
                echo "<img src='img/copas10.png'> \n";
            }elseif($naipe == 4 and $c == 11) {
                echo "<img src='img/copas11.png'> \n";
            }elseif($naipe == 4 and $c == 12) {
                echo "<img src='img/copas12.png'> \n";
            }elseif($naipe == 4 and $c == 13) {
                echo "<img src='img/copas13.png'> \n";
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