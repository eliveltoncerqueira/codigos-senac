<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notícia</title>
</head>
<body>
    <?php
        require_once 'classes/Autor.php';
        require_once 'classes/Noticia.php';

        $autor = new Autor();
        $noticia = new Noticia();
        $autor->login("Elivelton@cerqueira.com","87654321");

        if($_POST['enviar']=="Cadastrar"){
            $status = 1;
        }else{
            $status = 0;
        }

        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];
        $conteudo = $_POST['conteudo'];
        $imagem = $_FILES['imagem'];
        if(empty($imagem['name'])){
            $imagem = NULL;
        }
        if(empty($_POST['fonte'])){
           $fonte = NULL; 
        }else{
            $fonte = $_POST['fonte'];
        }

        $cadastrar = $noticia->cadastrarNoticia($titulo, $subtitulo, $conteudo, $autor, $status, $imagem, $fonte);

        if($cadastrar){
            echo "Noticia Cadastrada";
        }
        else{
            echo "Deu ruim";
        }


    ?>
</body>
</html>