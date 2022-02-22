<?php
session_start();
require_once 'classes/Autor.php';
$_SESSION['logado'] = false;

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$autor  = new Autor();
$cadastro = $autor->cadastrar($nome,$descricao,$email,$senha);

if($cadastro){
    $_SESSION['logado'] = true;
    ?>
    
    <h1>Você foi cadastrado com sucesso!</h1>
    <h3>Clique no botão abaixo para acessar o sistema de gestão de notícias</h3>
    <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="gestao/">Sistema de gestão</a></div>
    
    <?php
}else{

    $emailJaCadastro = $autor->verificarEmail($email);

    if($emailJaCadastro){
        ?>

        <h1>Esse e-mail já está sendo utilizado</h1>
        <h3>Tente fazer login</h3>
        <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="login.php">Fazer Login</a></div>

    <?php
    }else{
        ?>

        <h1>Não conseguimos efetivar o seu cadastro</h1>
        <h3>Tente novamente clicando abaixo</h3>
        <div class="d-flex justify-content-center mb-4"><a class="btn btn-primary text-uppercase" href="cadastro.php">Tentar Novamente</a></div>


        <?php

    }
}

?>