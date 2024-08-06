<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
        table{
            border-collapse: collapse;           
        }
        td{
            border: 1px solid black;
        }
     </style>

<body>

<?php
   
//ESTRUTURAS DE REPETIÇÃO 

//(não precisa declarar a variável)
//A variável em php se inicia com $
    
    /* exemplo: 
    for(inicializção, condição, incremento(x++)/decremento(x--)){
        //bloco de códigos 
    }
    for($x=1; $x<=10; $x++ ou $x=x+1) {
        echo "$x <br>";
    }
    */

    echo "<h1>Contando de 1 a 10.</h1>";
    for($x=1; $x<=10; $x++){
        echo "$x <br>";
    };


// TABELA EM PHP

/* para colocar bordas na tabela utilizar:
     <style>
        table{
            border-collapse: collapse;           
        }
        td{
            border: 1px solid black;
        }
     </style>*/

    echo "<h1> Tabela de 1 a 10 em PHP.</h1>"; 
    echo "<table><tr>";
    for ($x=1; $x<=10; $x++) {
        echo "<td>$x</td>";
    }
    echo "</tr></table>";
?>

</body>
</html>