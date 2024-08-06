<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Imagens</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px; 
            text-align: center; 
        }
        img{
            width: 250px;
        }
    </style>
</head>
<body>
    
    <?php 
        echo "<h1>Homens Aranhas</h1>"; 
        echo "<h2>Tabela de 1 a 10 em PHP</h2>"; 
        echo "<table><tr>";
        for ($x = 1; $x <= 5; $x++) {
            echo "<td><img src='img/$x.png' alt='Imagem $x'></td>";
        }
        echo "</tr><tr>";
        for ($x = 6; $x <= 10; $x++) {
            echo "<td><img src='img/$x.png' alt='Imagem $x'></td>";
        }
        echo "</tr></table>";

    ?>
    
</body>
</html>
