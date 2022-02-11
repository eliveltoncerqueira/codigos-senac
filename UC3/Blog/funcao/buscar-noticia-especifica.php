<?php
 require_once '../classes/Noticia.php';

 $noticia = new Noticia();

 $identificador  = $_GET['id'];

 $noticiaEspecifica = $noticia->buscarNoticiaPorIdentificador($identificador);
 
 if($noticiaEspecifica){
     $data = date_create($noticiaEspecifica['dataPublicacao']);
    ?>
        <header class="masthead" style="background-color: black;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?php echo $noticiaEspecifica['titulo']; ?></h1>
                            <h2 class="subheading"><?php echo $noticiaEspecifica['subtitulo']; ?></h2>
                            <span class="meta">
                                Escrito por
                            <?php echo $noticiaEspecifica['nome']; ?>
                            em <?php echo date_format($data, 'd/m/Y') ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <img class="img-fluid" style="width: 100%;" src="imagens/<?php echo $noticiaEspecifica['imagem']; ?>" alt="..." />

                        <p>
                            <?php echo $noticiaEspecifica['conteudo'] ?>
                        </p>
                        <p>
                            Fonte: <?php echo $noticiaEspecifica['fonte'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </article>

    <?php
 }else{
    ?>
    <header class="masthead" style="background-color: black;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading" style="text-align: center;">
                            <h1>Não conseguimos encontrar essa notícia!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

<?php
 }
?>