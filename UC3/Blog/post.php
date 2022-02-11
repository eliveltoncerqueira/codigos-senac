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
           
        

            
            var urlParametro = new URLSearchParams(window.location.search); //com essa função eu peguei o parâmetro que veio da URL
            var identificador = urlParametro.get('id');//Peguei o valor que tinha em 'id' e guardei na varíavel identificador

            var meninoDeRecado = new XMLHttpRequest();  // Eu criei um objeto XMLHttpRequest para me comunicar com a página que tem ligação do banco de dados (xhttp é O MENINO DE RECADO)

            meninoDeRecado.open("GET", "funcao/buscar-noticia-especifica.php?id="+identificador, true); //Eu abri a comunicação com a página que tem ligação com o banco de dados. E pra isso, eu preciso dizer como essa comunicação funciona ('GET' ou 'POST'), preciso dizer o link da página que eu tô trocandos os dados. E preciso dizer se a comunicação é assincrona (Se ela pode ocorrer a qualquer hora))

            meninoDeRecado.send(); //Aqui eu enviei os dados e recebi a resposta

            meninoDeRecado.onreadystatechange = function() { //Eu vou começar a verificiar o tipo de resposta que o menino de recado trouxe

                if (this.readyState == 4 && this.status == 200) { //Aqui eu verifico SE a comunicação deu certo (readyState ele verifica se a comunicação foi aberta, enviada e processada corretamente). e this.status (ele verifica se a página funcao/buscar-noticia-especifica funcionou corretamente )

                    document.getElementById("noticia").innerHTML = meninoDeRecado.responseText; //se tudo deu certo, eu vou exibir a resposta no local do elemento que tem o id 'noticia'
                }else{
                    document.getElementById("noticia").innerHTML = "<h1 style='padding:40px;text-align:center'>Não conseguimos conectar com os nossos servidores, tente novamente mais tarde</h1>"; //Se não deu certo, ele vai exibir essa mensagem que eu escrevi no local do elemente que tem o id 'noticia'
                   
                }
            };
            </script>
    </head>
    <body>
        <!-- Navigation-->
        <?php require 'inc/nav.php' ?>
        <!-- Page Header-->
        <div id="noticia">
            <!-- AQUI VAI SER EXIBIDA A NOTÍCIA -->

        </div>
        <!-- Footer-->
        <?php require 'inc/footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
