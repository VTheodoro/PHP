<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>

<body>

    <form action="index.php" method="post">

        <label>Nome</label>
        <input type="text" name="campo_nome">
        <label>Cidade</label>
        <input type="text" name="campo_cidade">
        <input type="submit">

    </form>

    
    <?php

if(empty($nome)){
    $nome = "";
}
else{
    $nome = $_POST["campo_nome"];
}


if(empty($cidade)){
    $cidade = "";
}
else{
    $cidade = $_POST["campo_cidade"];
}

    ?>


    <h1>Resultado</h1>
    A pessoa se chama <b><?php echo $nome?></b> e mora na cidade de <b><?php echo $cidade?></b>


</body>

</html>