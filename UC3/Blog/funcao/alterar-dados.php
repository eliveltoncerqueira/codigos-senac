<?php
require_once '../classes/Autor.php';

$autor = new Autor();

$autor->login("Elivelton@cerqueira6.com","12345678");

$alterou = $autor->editarDados("Elivelton Cerqueira","Sou Elivelton","elivelton@cerqueira.com");

if($alterou){
    echo "Foi!";
}else{
    echo "Foi não";
}


?>