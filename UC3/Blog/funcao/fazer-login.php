<?php
require_once '../classes/Autor.php';

//$email  = $_POST['email'];
//$senha = $_POST['senha'];


$autor  = new Autor();

$login = $autor->login("Elivelton@cerqueira.com","87654321");

if($login){
    echo "Olá, ".$autor->getNome();


}else{
    echo "Tu não pode entrar no sistema";
}
?>