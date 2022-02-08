<?php
require_once "../classes/Noticia.php";

$noticia = new Noticia();

$deletar = $noticia->deletarNoticia(19);

if($deletar){
    echo "Noticia deletada";
}else{
    echo "Deu erro";
}
?>
