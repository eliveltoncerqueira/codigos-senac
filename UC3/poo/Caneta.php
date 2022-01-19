<?php

class Caneta{
    var $cor;
    var $ponta;
    var $marca;
    var $carga;
    var $tampa;

    function riscar(){
        if($this->tampa == false){
            if($this->carga > 0){
                echo "Estou riscando com a cor ".$this->cor;
            }else{
                echo "Sem tinta";
            }
        }else{
            echo "A Caneta está tampada";
        }
    }

    function escrever(){
        if($this->tampa == false){
            if($this->carga > 0){
                echo "Estou escrevendo com a cor ".$this->cor;
            }else{
                echo "Sem tinta";
            }
        }else{
            echo "A Caneta está tampada";
        }
    }
    
    function desenhar(){
        if($this->tampa == false){
            if($this->carga > 0){
                echo "Estou desenhando com a cor ".$this->cor;
            }else{
                echo "Sem tinta";
            }
        }else{
            echo "A Caneta está tampada";
        }
        echo "<br>";
    }

}



?>