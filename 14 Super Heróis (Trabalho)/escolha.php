<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha do Herói</title>
</head>
<body>
    
<h1>Escola um Herói</h1>
<?php
$universo = $_POST['universo'];
$herois = [];

if($universo == 'marvel'){
    $herois = ['Homem de Ferro','Capitão America','Homem Formiga','Hulk','Homem Aranha'];
} else if ($universo == 'dc'){
    $herois = ['Batman','Flash','Mulher Maravilha','Shazam','Super Man'];
}
?>

<form action="mostrar.php" method="post">
    <input type="hidden" name="universo" value="<?php echo $universo; ?>">

    <label>Escolha o Herói:</label>
    <select name="heroi" required>
        <?php foreach($herois as $heroi):?>
            <option value="<?php echo $heroi;?>"><?php echo $heroi;?></option>
        <?php endforeach; ?>
    </select>

<br><br>

<label>Digite Quantas Vezes o Herói Deve Aparecer:</label>
<input type="number" name="quantidade" min="1" required>
<br><br>
<input type="submit" value="Mostrar">
</form>

</body>
</html>