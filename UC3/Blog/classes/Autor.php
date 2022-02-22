<?php
require_once 'Conexao.php';
require_once 'Noticia.php';

class Autor{
    private $identificador;
    private $nome;
    private $descricao;
    private $email;
    private $senha;
    private $ativo;
    private $conexao;

    public function __construct(){
       $conn = new Conexao();
       $this->conexao = $conn->conectar(); 
    }

    public function getIdentificador(){
        return $this->identificador;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getAtivo(){
        return $this->ativo;
    }
    private function setIdentificador($identificador){
        $this->identificador = $identificador;
    }
    private function setNome($nome){
        $this->nome = $nome;
    }
    private function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    private function setEmail($email){
        $this->email  = $email;
    }
    private function setAtivo($ativo){
        $this->ativo = $ativo;
    }

    public function cadastrar($nome, $descricao, $email, $senha){
        try{
            $hashSenha = password_hash($senha, PASSWORD_DEFAULT);
            $consulta = $this->conexao->prepare("INSERT INTO autor (nome, email, descricao, senha) VALUE (:NOME, :EMAIL, :DESCRICAO, :SENHA)");
            $consulta->bindParam(':NOME', $nome);
            $consulta->bindParam(':EMAIL', $email);
            $consulta->bindParam(':DESCRICAO', $descricao);
            $consulta->bindParam(':SENHA', $hashSenha);
            $consulta->execute();

           

            return true;
        }catch(PDOException){
            return false;
        }
        

    }
    public function login($email, $senha){
        
        $consulta = $this->conexao->prepare("SELECT * FROM autor WHERE email=:EMAIL");
        $consulta->bindParam(":EMAIL", $email);
        $consulta->execute();

        if($consulta->rowCount() > 0){
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            $hashSenha = $resultado[0]['senha'];

            if(password_verify($senha,$hashSenha)){
                //Login feito com sucesso
                $this->setIdentificador($resultado[0]['identificador']);
                $this->setNome($resultado[0]['nome']);
                $this->setEmail($resultado[0]['email']);
                $this->setDescricao($resultado[0]['descricao']);
                $this->setAtivo($resultado[0]['ativo']);
                
                return true;
            }else{
                return false;
            }
        
        }else{
            return false;
        }
    }
    public function verificarEmail($email){
        $consulta = $this->conexao->prepare("SELECT * FROM autor WHERE email=:EMAIL");
        $consulta->bindParam(":EMAIL", $email);
        $consulta->execute();
        if($consulta->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function buscarDadosDoAutor($email){
         
        $consulta = $this->conexao->prepare("SELECT * FROM autor WHERE email=:EMAIL");
        $consulta->bindParam(":EMAIL", $email);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $this->setIdentificador($resultado[0]['identificador']);
        $this->setNome($resultado[0]['nome']);
        $this->setEmail($resultado[0]['email']);
        $this->setDescricao($resultado[0]['descricao']);
        $this->setAtivo($resultado[0]['ativo']);
    
    }
    
    public function editarDados($nome, $descricao, $email){
      
        try{
            $consulta = $this->conexao->prepare("UPDATE autor SET nome=:NOME, descricao=:DESCRICAO, email=:EMAIL WHERE identificador=".$this->getIdentificador());
            $consulta->bindParam(":NOME", $nome);
            $consulta->bindParam(":DESCRICAO", $descricao);
            $consulta->bindParam(':EMAIL', $email);
            $consulta->execute();
            
            return true;
        }catch(PDOException){
            return false;
        }
      
    }
    public function alterarSenha($senhaAtual, $novaSenha){
        try{
            $consulta = $this->conexao->prepare("SELECT senha FROM autor WHERE identificador=".$this->getIdentificador());
            $consulta->execute();
        
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            $hashSenhaAtual = $resultado[0]['senha'];
        
            if(password_verify($senhaAtual, $hashSenhaAtual)){
            
                $hashNovaSenha = password_hash($novaSenha, PASSWORD_DEFAULT);
                
                $consultaAltSenha = $this->conexao->prepare("UPDATE autor SET senha='".$hashNovaSenha."' WHERE identificador=".$this->getIdentificador());
                $consultaAltSenha->execute();
            
                return true;
            }else{
                return false;
            }
        }catch(PDOException){
            return false;
        }
        
        
    }


    public function ativar(){
      
        try{
            if($this->getAtivo()==0){
                $consulta = $this->conexao->prepare("UPDATE autor SET ativo=1 WHERE identificador=".$this->getIdentificador());
                $consulta->execute();

                $this->setAtivo(1);

                return true;
            }else{
                return false;
            }
        }catch(PDOException){
            return false;
        }
    }


    public function desativar(){
        try{
            if($this->getAtivo()==1){
                $consulta = $this->conexao->prepare("UPDATE autor SET ativo=0 WHERE identificador=".$this->getIdentificador());
                $consulta->execute();
                $this->setAtivo(0);
                return true;
            }else{
                return false;
            }
        }catch(PDOException){
            return false;
        }
    }
   




}


?>