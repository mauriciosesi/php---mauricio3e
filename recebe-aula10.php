<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style10_1.css">
</head>

<body>
<h1>Corrida comunitária</h1>
    <h2>Página de Confirmação</h2>
    <?php
    

    echo "<p>Olá, " . $_POST["nome"] . ",  você é do sexo " . $_POST["sexo"] . ", nascido em " . $_POST["data_nascimento"] .  ", estado civil " . $_POST["estado_civil"] . ", de nacionalidade " . $_POST["nacionalidade"] . ", com RG " . $_POST["numero_rg"] . " e CPF " . $_POST["cpf"] . ". Você mora na " . $_POST["logradouro"] . " número " . $_POST["numero"] . " " . $_POST["complemento"] . ", no bairro " . $_POST["bairro"] . ", na cidade de " . $_POST["cidade"] . " no Estado de " . $_POST["estado"] . ", com CEP " . $_POST["cep"] . ". Seu telefone de contato é " . $_POST["telefone"] . " e seu e-mail é " . $_POST["e_mail"] . ". Seja bem-vindo ao sistema!!</p><br>";

    echo "<p>Obrigado pela Sua Confirmação!<br>

muito obrigado por nos ajudar a espalhar o amor por meio de doações.<br>

Sua participação é muito importante para todas as pessoas carêntes, especialmente as que estão em situação de rua. <br>

</p><br>";
    ?>
</body>
</html>