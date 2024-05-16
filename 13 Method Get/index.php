<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>

<body>
 
<?php 
$produto_cod = 25;
$produto_nome = "Bolacha Recheada";

$loja_nome = "Magnanimo";
$n_funcionarios = 67;
?>

<a href="destino2.php?id_loja_nome=<?php echo $loja_nome?>&id_n_funcionarios=<?php echo $n_funcionarios?>">Exibir Sobre a Loja</a>
<br>
<a href="destino.php?id_produto_cod=<?php echo $produto_cod ?>&id_produto_nome=<?php echo $produto_nome?>">Exibir Sobre o Produto</a>


</body>

</html>