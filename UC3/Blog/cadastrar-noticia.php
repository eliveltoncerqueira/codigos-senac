<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Notícia</title>
</head>
<body>
    <form action="confirmacao-cadastro-noticia.php" method="POST" enctype="multipart/form-data">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo"><br><br>
        <label for="subtitulo">Subtítulo:</label><br>
        <input type="text" id="subtitulo" name="subtitulo"><br><br>
        <label for="imagem">Imagem:</label><br>
        <input type="file" id="imagem" name="imagem"><br><br>
        <label for="fonte">Fonte:</label><br>
        <input type="text" id="fonte" name="fonte"><br><br>
        <label for="conteudo">Insira a notícia aqui:</label><br>
        <textarea id=conteudo name="conteudo"></textarea><br><br>

        <input type="submit" id="enviar" name="enviar" value="Salvar">
        <input type="submit" id="enviar" name="enviar" value="Cadastrar">
    </form>
</body>
</html>