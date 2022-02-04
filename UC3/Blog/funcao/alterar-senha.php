<?php
require_once '../classes/Autor.php';

$autor = new Autor();

$autor->login("Elivelton@cerqueira.com","12345678");

$alterou = $autor->alterarSenha("12345678","87654321");

if($alterou){
    echo "Foi!";
}else{
    echo "Foi não";
}


?>