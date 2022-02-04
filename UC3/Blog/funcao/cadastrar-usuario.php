<?php
require_once '../classes/Autor.php';


$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$autor  = new Autor();
$cadastro = $autor->cadastrar($nome,$descricao,$email,$senha);

if($cadastro){
    echo "Foi!";
}else{
    echo "Deu ruim";
}

?>