<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
</head>
<body>
    
<?php

$site = "https://github.com/VTheodoro/";
$aula = "php";
if($aula=="php"){
    header("location:".$site);
}else{
    echo "Aula Inexistente!";
}


?>

</body>
</html>