<?php

$conn = new PDO('mysql:host=localhost;dbname=blog;','root','');

$nome = "Júlio";
$identificador  = 10;

$consulta = $conn->prepare("UPDATE nome_tabela SET campo_a_ser_atualizado=:NOVO_VALOR , campo_a_ser_atualizado=:NOVO_VALOR  WHERE identificador=:IDENTIFICADOR");

$consulta->bindParam(':NOME', $nome);
$consulta->bindParam(':IDENTIFICADOR', $identificador);

$consulta->execute();


echo "Ok!";

?>