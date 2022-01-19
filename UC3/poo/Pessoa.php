<?php
    class Pessoa{
        var $altura;
        var $peso;
        var $nome;
        var $idade;



        function andar(){
            echo $this->nome." está andando";
            echo "<br>";
        }

        function correr(){
            echo $this->nome." está correndo";
            echo "<br>";
        }

        function exercitar(){
            echo $this->nome." está fazendo exercicio";
            echo "<br>";
        }
        function comer(){
            echo $this->nome." está comendo";
            echo "<br>";
        }
        function dormir(){
            echo $this->nome." está dormindo";
            echo "<br>";
        }


    }



?>