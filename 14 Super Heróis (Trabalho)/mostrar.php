<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando o Herói</title>
</head>

<body>

    <h1>Herói Escolhido</h1>
    <?php
    $heroi = $_POST['heroi'];
    $quantidade = $_POST['quantidade'];
    $universo = $_POST['universo'];


    $imagens = [
        'Homem de Ferro' => 'imgs/marvel/homem-de-ferro.png',
        'Capitão America' => 'imgs/marvel/capitao-america.png',
        'Hulk' => 'imgs/marvel/hulk.png',
        'Homem Formiga' => 'imgs/marvel/homem-formiga.png',
        'Homem Aranha' => 'imgs/marvel/homem-aranha.jpg',
        'Batman' => 'imgs/dc/batman.jpg',
        'Flash' => 'imgs/dc/flash.png',
        'Mulher Maravilha' => 'imgs/dc/mulher-maravilha.jpg',
        'Shazam' => 'imgs/dc/shazam.jpg',
        'Super Man' => 'imgs/dc/super-man.png'
    ];

    $imagem = $imagens[$heroi];

    ?>

    <?php for ($i = 0; $i < $quantidade; $i++) : ?>
        <img src="<?php echo $imagem; ?>" alt="<?php echo $heroi; ?>" style="width:200px; height:auto;">
    <?php endfor; ?>

</body>

</html>