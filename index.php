<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Cartas</title>
    <?php 
    $jogador = "";
    if(isset($_POST['nome']))
       $jogador = $_POST['nome'];

    $naipe = "";
    if(isset($_POST['naipe']))
       $naipe = $_POST['naipe'];
    
    $cartas = "";
       if(isset($_POST['cartas']))
          $cartas = $_POST['cartas'];

    $ouro1 = '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTry9XVMP2enUiSdmlaG5y091Dq5Mr389Mzze53Ng6G_CIaRENWyIAZmkSvIIdKo3-EzKw&usqp=CAU">';
    ?> 
</head>
<body>
    <form action="" method="post">
    Jogador: <input type="text" name="nome" id="nome"><br><br>
    <input type="radio" id="ouros" name="naipe" value="ouros">
    <label for="ouros">Ouros</label><br>
    <input type="radio" id="copas" name="naipe" value="copas">
    <label for="copas">Copas</label><br>
    <input type="radio" id="paus" name="naipe" value="paus">
    <label for="paus">Paus</label><br>
    <input type="radio" id="espadas" name="naipe" value="espadas">
    <label for="espadas">Espadas</label><br><br>
    Número de cartas desejado: <br>
    <select name="cartas">
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
    </select><br><br>
    <button type="submit">Próximo<a href="cartas.php"></a></button>
    </form>
</body>
</html>