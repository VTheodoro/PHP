<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>

<body>

<?php
//variavel comum -- variavel do sistema
$nome = $_POST["campo_nome"];
$cidade = $_POST["campo_cidade"];
?>

    <h1>Resultado</h1>
    A pessoa se chama <b><?php echo $nome?></b> e mora na cidade de <b><?php echo $cidade?></b>

</body>

</html>