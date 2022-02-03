<?php

$nome = "Elivelton";
$descricao = "Sou o Elivelton";
$email = "elivelton@cerqueira.com";
$senha = "3524241";
$hashSenha = password_hash($senha, PASSWORD_DEFAULT);

$conn = new PDO('mysql:host=localhost;dbname=blog;','root','');

$consulta = $conn->prepare("INSERT INTO autor (nome, descricao, email, senha) VALUE (:NOME, :DESCRICAO, :EMAIL, :SENHA)");





$consulta->bindParam(":NOME", $nome);
$consulta->bindParam(":DESCRICAO", $descricao);
$consulta->bindParam(":EMAIL", $email);
$consulta->bindParam(":SENHA", $hashSenha);

$consulta->execute();

echo "Ok!";



?>