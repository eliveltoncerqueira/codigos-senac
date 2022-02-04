<?php

require_once 'classes/Autor.php';

$autor = new Autor();

$autor->login("Elivelton@cerqueira.com","87654321");

$teste =  $autor->ativar();

if($teste){
    echo "Conta ativada";
}else{
    echo "erro";
}

?>