<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 PHP</title>
</head>
<body>
    <?php
    echo "<h1>Arrays - Vetores</h1>";
    $carros = array('Fiesta','Palio','Corsa','Siena');

    /*
    0-fiesta
    1-palio
    2-corsa
    3-siena
    por isso que o número 3 é o siena e na ordem escrita ele seria o quarto carro (a array/vetorres começa a ser contado no 0)
    */

    echo $carros[1], "<br>";
    echo $carros[3], "<br>";

    //Adicionando novos elementos
    $carros[4] = "Clio";
    $carros[11] = "Versa";
    $carros[ ] = "Sandero";
    echo $carros[4] , "<br>";  //Resultado Clio 
    echo $carros[5] , "<br>"; //Sem Resultado
    echo $carros[11] , "<br>"; //Resultado Versa 
    echo $carros[12] , "<br>"; //Resultado Sandero

    



    ?>
</body>
</html>