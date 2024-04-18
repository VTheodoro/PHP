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
if($cidade == "Registro"){
    echo "Sua cidade é Registro!";
}else{
    echo "Você digitou outra cidade!";
}
?>   

<!-- Utilizando Estrutura Condicional Alinhada: -->
<hr>
<?php
$cidade = "Sete Barras";
if($cidade == "Registro"){
    echo "Sua cidade é Registro!";
}else if($cidade == "Sete Barras"){
    echo "Sua cidade é Sete Barras";
} else{
    echo "Você digitou outra cidade!";
}
?>

<hr>
<?php
$uf = "São Paulo";
$cidade = "Registro";

if($uf == "São Paulo"){
    echo "Você Selecionou a UF São Paulo";
    if($cidade == "Registro"){
        echo "e a cidade de Registro";
    }
}

else if($uf == "Paraná"){
    echo "Você Selecionou a UF Paraná";
    if($cidade == "Curitiba"){
        echo "e a cidade de Curitiba";
    }

    else{
        echo "Você Selecionou uma UF Inválida";
    }

}









?> 













</body>
</html>