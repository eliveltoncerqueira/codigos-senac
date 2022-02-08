<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "../classes/Noticia.php";

    $noticia = new Noticia();

    $todasNoticias = $noticia->buscarTodasNoticias();

    foreach ($todasNoticias as $umaNoticia) {
       ?>
            
            <img src="../imagens/<?php echo $umaNoticia['imagem'] ?>" alt="teste de alt padrão">
            <h1><?php echo $umaNoticia['titulo'] ?></h1>
            <h3><?php echo $umaNoticia['subtitulo'] ?></h3>
            <br><br>
            <hr>

        <?php
    }


    ?>
</body>
</html>