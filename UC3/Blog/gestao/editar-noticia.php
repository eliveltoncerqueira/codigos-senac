<?php   
include '../inc/Logado.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="ckeditor/ckeditor.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <a href="index.php" class="btn btn-primary btn-icon-split" style="margin: 20px;">
                            <span class="icon text-white-50">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            <span class="text">Voltar</span>
                        </a>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Editar Notícia</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="titulo" name="titulo"
                                        placeholder="Título" value="<?php echo $n['identificador'];'">
                                </div>
                                <div class="form-group">
                                    <input type="texto" class="form-control form-control-user" id="subtitulo" name="subtitulo"
                                        placeholder="Subtítulo" value="Aqui vai estar o subtítulo">
                                </div>
                               
                                <div class="form-group ">
                                    <input type="text" class="form-control form-control-user"
                                        id="fonte" name="fonte" placeholder="Fonte" value="Aqui vai estar a fonte">
                                
                                </div>
                                <div class="form-group">
                                    <textarea name="conteudo" id="conteudo" rows="10" cols="80">
                                        Aqui vai estar o texto da notícia
                                    </textarea>
                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor 4
                                        // instance, using default configuration.
                                        CKEDITOR.replace( 'conteudo' );
                                    </script>
                                </div>
                                <input type="submit" class="btn btn-primary btn-user btn-block" id="enviar" name="enviar" value="Enviar">
                                <hr>
                                
                            </form>
                            <hr>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>