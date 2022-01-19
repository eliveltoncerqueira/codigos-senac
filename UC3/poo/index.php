<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';
        require_once 'Pessoa.php';

        $canetaAzul = new Caneta();
        $canetaAzul->cor = "Azul";
        $canetaAzul->ponta = 0.7;
        $canetaAzul->marca = "Bic";
        $canetaAzul->carga = 70;
        $canetaAzul->tampa = false;


        $canetaVermelha = new Caneta();
        $canetaVermelha->cor = "Vermelha";
        $canetaVermelha->ponta = 0.9;
        $canetaVermelha->marca = "Outra Marca";
        $canetaVermelha->carga = 0;
        $canetaVermelha->tampa = true;

        
        $canetaAzul->desenhar();

        $edson = new Pessoa();
        $edson->nome = "Edson";
        $edson->peso = 70;
        $edson->altura  = 1.70;
        $edson->idade = 17;

        $julia = new Pessoa();
        $julia->nome = "Júlia";
        $julia->peso = 55;
        $julia->altura = 1.58;
        $julia->idade = 16;

        $lucas = New Pessoa();
        $lucas->nome = "Lucas";
        $lucas->peso = 75;
        $lucas->altura = 1.70;
        $lucas->idade = 17;

        $adriel = New Pessoa();
        $adriel->nome = "Adriel";
        $adriel->peso = 68;
        $adriel->altura = 1.73;
        $adriel->idade = 18;


        $julia->dormir();
        $adriel->comer();
        $lucas->andar();
        $edson->exercitar();


        

    ?>
</body>
</html>