<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha do Universo</title>
</head>

<body>

    <h1>Escolha o Universo de Heróis Desejado:</h1>
    
    <form action="escolha.php" method="post">
        <label>
            <input type="radio" name="universo" value="marvel" required>Marvel
        </label>
        <label>
            <input type="radio" name="universo" value="dc" required>DC
        </label>
        <br><br>
        <input type="submit" value="Próximo">
    </form>

</body>

</html>