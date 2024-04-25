<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
    
<?php

//estrutura de repetição for simples
for($x=0;$x<5;$x++){
    echo $x . "<br>";
}

//estrutura de repetição for alinhada
for($x=0;$x<5;$x++){
    echo $x . "<br>";
    
    for($y=0;$y<5;$y++){
        echo $x . "<br>";
    }
}

?>

</body>
</html>