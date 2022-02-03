<?php
$nome = "Elivelton";


$conn = new PDO('mysql:host=localhost;dbname=blog;','root','');

$consulta = $conn->prepare("SELECT * FROM autor WHERE nome=:NOME");

$consulta->bindParam(':NOME', $nome);

$consulta->execute();

$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);


foreach($resultado as $linha){
    foreach($linha as $campo=>$valor){
        echo $campo.":".$valor;
        echo "<br>";
    }
    echo "<br><br>";
}



?>