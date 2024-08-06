<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
<style>
    p{
        color: blueviolet;
    }
</style>

</head>
  
<body>
    <h1>Aprendendo PhP</h1>

    <?php
    //esse é um comentário de uma linha
    # Posso utilizar hashtag para comentário

    /*esse é comentario de + de 1 linha
     posso escrever mais de uma linha*/
    
    echo "Aqui aparece um texto na tela do usuáio";
    //Podemos colocar tag HTML dentro do PHP

    echo "<h1>Esse é um titulo</h1>";
    echo "<p>Parágrafo do texto</p>";
    
    //Comandos de saída:
    //echo - Imprime uma string na tela
    //print - Imprime uma string na tela
    print "<p>Texto dentro do print</p>";

    //Variáveis no PHP
    //Sempre iniciam com $ seguido com o nome da variável desejada
    //Não é necessário indentificar o tipo de variável
    //Para criar uma variável basta atribuir o valor a ela

    $nome = "Mauricio";
    $altura = 1.68;
    $idade = 17;
    echo "$nome tem $altura m e $idade anos de idade<br><br>";

    //Operadores Aritiméticos
    $a = 25;
    $b = 5;
    $c = $a + $b;
    echo "a soma de $a e $b é igual a $c<br>";
    
    $c = $a - $b;
    echo "a subtração de $a e $b é igual a $c<br>";
    
    $c = $a * $b;
    echo "a multiplicação de $a e $b é igual a $c<br>";
    
    $c = $a / $b;
    echo "a divisão de $a e $b é igual a $c<br>";
    
    $c = $a % $b;
    echo "o resto da divisão de $a e $b é igual a $c<br>";
    
    $c = $a ** $b;
    echo "a potência de $a e $b é $c<br>";



    ?>
    
</body>
</html>