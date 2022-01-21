<?php
class Conta {
    private $nome;
    private $saldo;
    private $cpf;
    private $senha;
    private $ativo;
    private $tipo;


    public function __construct($nome, $cpf, $senha, $tipo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->tipo = $tipo;
        $this->saldo = 0;
        $this->ativo = true;
        echo "Parabéns, ".$this->nome."! Você acabou de abrir uma conta!<br><br>";
    }

    public function sacar($valor, $senha){
        if($senha == $this->senha){

            if($valor <= $this->saldo){
                $this->saldo =  $this->saldo - $valor;
                echo "Você sacou R$".$valor."<br><br>";
            }else{
                echo "Saldo insuficiente<br><br>";
            }


        }else{
            echo "Senha Incorreta<br><br>";
        }
    }


    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "Você depositou R$".$valor."<br><br>";
    }


    public function transferir($senha, $valor, $receptor){
        if($this->senha == $senha){
            if($this->saldo >= $valor){
                $this->sacar($valor, $senha);
                $receptor->depositar($valor);
                echo "Você transferiu R$".$valor." para ".$receptor->nome."<br><br>";
            }else{
                echo "Saldo insuficiente<br><br>";
            }
        }else{
            echo "Senha Incorreta<br><br>";
        }
    }


    public function puxarExtrato($senha){
        if($senha == $this->senha){
            echo "Nome: ".$this->nome."<br>";
            echo "Saldo: R$".$this->saldo."<br><br>";
        }else{
            echo "Senha Incorreta<br><br>";
        }
    }


    public function cancelar($senha, $cpf){
        
    }


    private function alterarDados($nome, $cpf, $senha){

    }

}
?>