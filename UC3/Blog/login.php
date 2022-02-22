<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Meu Blog</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script>
            function enviarDados(){
                var formulario  = document.forms.namedItem("formlogin"); //Guardei dentro da variável 'formulario' todo  o formulario de login
                
                var dados = new FormData(formulario); //Aqui eu peguei todos os dados que estavam no formulário

                var meninoDeRecado = new XMLHttpRequest();  // Eu criei um objeto XMLHttpRequest para me comunicar com a página que tem ligação do banco de dados (xhttp é O MENINO DE RECADO)

                meninoDeRecado.open("POST", "funcao/fazer-login.php", true); //Eu abri a comunicação com a página que tem ligação com o banco de dados. E pra isso, eu preciso dizer como essa comunicação funciona ('GET' ou 'POST'), preciso dizer o link da página que eu tô trocandos os dados. E preciso dizer se a comunicação é assincrona (Se ela pode ocorrer a qualquer hora))

                meninoDeRecado.send(dados); //Aqui eu enviei os dados e recebi a resposta

                meninoDeRecado.onreadystatechange = function() { //Eu vou começar a verificiar o tipo de resposta que o menino de recado trouxe

                    if (this.readyState == 4 && this.status == 200) { //Aqui eu verifico SE a comunicação deu certo (readyState ele verifica se a comunicação foi aberta, enviada e processada corretamente). e this.status (ele verifica se a página funcao/buscar-noticia-especifica funcionou corretamente )
                        var resposta = meninoDeRecado.responseText; //Guardei a resposta na variável resposta
                        if(resposta == 'Sim'){ //Se o usuário conseguiu logar
                            document.location = 'gestao/index.php'; //Vou redirecionar ele pro sistema de gestão de notícias
                        }else{//Se o usuário não conseguiu logar
                            document.getElementById("resposta").innerHTML = resposta; //Vou exibir a mensagem pra ele, com o motivo de ele não conseguir logar
                        }
                        //se tudo deu certo, eu vou exibir a resposta no local do elemento que tem o id 'noticia'
                    }
                };
            }
        </script>
    </head>
    <body>
        <!-- Navigation-->
        <?php require 'inc/nav.php' ?>
        <!-- Page Header-->
        <header class="masthead" style="background-color: black;">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Login</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                       
                        <div class="my-5">
                            
                        <div id="resposta" style="text-align: center;color: red;"></div>
                            
                            <form id="contactForm" name="formlogin" method="post" onsubmit="enviarDados(); return false;">
                                <div class="form-floating">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Entre com seu e-mail" required />
                                    <label for="email">Email</label>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="senha" name="senha" type="password" placeholder="Digite sua senha" />
                                    <label for="senha">Senha</label>
                                    
                                </div>
                                
                                <br />

                                <input class="btn btn-primary text-uppercase" id="enviar" name="enviar" value="Enviar" type="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php require 'inc/footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
