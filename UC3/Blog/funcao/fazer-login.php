<?php
require_once '../classes/Autor.php';
session_start();
$_SESSION['logado']=false;

$email  = $_POST['email'];
$senha = $_POST['senha'];


$autor  = new Autor();

$login = $autor->login($email,$senha);

if($login){
   //O usuário conseguiu logar 
    echo "Sim";
    $_SESSION['logado'] = true;
    $_SESSION['idautor'] = $autor->getIdentificador();

}else{
    //O usuário não conseguiu logar
    $emailExiste = $autor->verificarEmail($email);
    
    if($emailExiste){
        echo "A senha está incorreta";
    }else{
        echo "E-mail não está cadastrado";
    }
    
}







$idautor  = $_SESSION['idautor'];

?>