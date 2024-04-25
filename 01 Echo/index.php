<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo</title>
</head>

<body>

    <!-- Modo Semanticamente Correto de se Trabalhar: -->
    <?php
    $nome = "Victor";
    $cidade = "Jacupiranga";
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome ?></td>
                <td><?php echo $cidade ?></td>
            <tr>
        </tbody>
    </table>
</body>

</html>