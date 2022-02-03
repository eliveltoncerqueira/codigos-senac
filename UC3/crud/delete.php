<?php

$identificador = 13;

$conn = new PDO("mysql:host=localhost;dbname=blog;","root","");

$consulta = $conn->prepare("DELETE FROM autor WHERE identificador=:IDENTIFICADOR");

$consulta->bindParam(':IDENTIFICADOR', $identificador);

$consulta->execute();

echo "Ok";


?>