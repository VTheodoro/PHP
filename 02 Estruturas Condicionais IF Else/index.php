<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas Condicionais IF Else</title>
</head>

<body>

    <!-- Utilizando Estrutura Condicional Isolada: -->
    <hr>
    <?php
    $cidade = "Sete Barras";
    if ($cidade == "Registro") {
        echo "Sua cidade é Registro!";
    } else {
        echo "Você digitou outra cidade!";
    }
    ?>

    <!-- Utilizando Estrutura Condicional Alinhada: -->
    <hr>
    <?php
    $cidade = "Sete Barras";
    if ($cidade == "Registro") {
        echo "Sua cidade é Registro!";
    } else if ($cidade == "Sete Barras") {
        echo "Sua cidade é Sete Barras";
    } else {
        echo "Você digitou outra cidade!";
    }
    ?>

    <hr>
    <?php
    $pais = "Brasil";
    $uf = "São Paulo";
    $cidade = "Registro";

    if ($pais == "Brasil") {
echo "Você Selecionou o País Brasil";
        if ($uf == "São Paulo") {
            echo " No UF São Paulo";
            if ($cidade == "Registro") {
                echo " e a cidade de Registro";
            }
        }
    } else if ($uf == "Paraná") {
        echo "Você Selecionou a UF Paraná";
        if ($cidade == "Curitiba") {
            echo " e a cidade de Curitiba";
        } else {
            echo " Você Selecionou uma UF Inválida";
        }
    }

else if($pais == "Peru"){
    echo "O País Selecionado é o Peru";
}

else{
    echo "Selecione um País Válido!";
}


    ?>













</body>

</html>