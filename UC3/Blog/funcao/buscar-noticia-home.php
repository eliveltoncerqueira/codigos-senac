<?php
    require_once "../classes/Noticia.php";

    $noticia = new Noticia();

    $Noticias = $noticia->buscarNoticiasHome();

  

    foreach ($Noticias as $n) {
        $data = date_create($n['dataPublicacao']);
       ?>
            
            <div class="post-preview">
                <a href="post.php?id=<?php echo $n['identificador'] ?>">
                    <img class="img-fluid" style="width: 100%;" src="imagens/<?php echo $n['imagem'] ?>" alt="Notícia 04" >
                    <h3 class="post-title"><?php echo $n['titulo'] ?></h3>
                    <h4 class="post-subtitle"><?php echo $n['subtitulo'] ?></h4>
                </a>
                <p class="post-meta">
                    Escrito por <?php echo $n['nome']?> em <?php echo date_format($data, 'd/m/Y') ?>
                </p>
            </div>
            <hr class="my-4" />

        <?php
    }


    ?>

<div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="todas-noticias.php">Postagens antigas →</a></div>