<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de variáveis</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="formulario">
        <h3>
            <?php
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $numero3 = $_POST['numero3'];
                 

                $operacao = 12;
                echo $operacao;
               
            ?>
        </h3>

        <a href="index.html">VOLTAR AO INÍCIO</a>
    </div>
</body>
</html>


Ordem de precedência

1 - Parenteses (3 + 5)

2 - Potenciacao


3 - Multiplicacao , divisão e resto - 2 *  8


4 - Soma e subtração