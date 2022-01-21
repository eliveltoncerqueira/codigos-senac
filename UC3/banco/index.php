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
    require_once "Conta.php";

    $elivelton  = new Conta('Elivelton','094.985.994-50', 8759, "Corrente");

    $elivelton->sacar(50, 8759);
    
    $elivelton->depositar(100);
    
    $elivelton->puxarExtrato(8759);
    
    $elivelton->sacar(50, 8759);
    
    $elivelton->puxarExtrato(8759);

    $julio = new Conta('Julio','096-984-865-50',7483,"Poupança");
    
    $elivelton->transferir(8759, 1, $julio);

    $julio->puxarExtrato(7483);

    $edson = new Conta('Edson','904-092-764-82',6123,"Corrente");

    $edson->depositar(45);

    $edson->transferir(6123, 10, $julio);

    $julio->puxarExtrato(7483);

    $lucas = new Conta('Lucas','098-038-093-04',9820,"Poupança");
    
    $lucas->depositar(100);

    $lucas->transferir(9820, 20, $elivelton);

    $elivelton->puxarExtrato(8759);

    $elivelton->puxarExtrato(8759);

    ?>
</body>
</html>