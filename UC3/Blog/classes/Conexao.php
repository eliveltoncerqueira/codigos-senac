<?php 

class Conexao{
    private $endereco;
    private $usuario;
    private $senha;

    public function __construct(){
        $this->endereco = "mysql:host=localhost;dbname=blog;";
        $this->usuario = "root";
        $this->senha = "";
    }

    public function conectar(){
        
        $conn = new PDO($this->endereco, $this->usuario, $this->senha);
        
        return $conn;
    
    
    }

}



?>