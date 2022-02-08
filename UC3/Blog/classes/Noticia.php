<?php 

date_default_timezone_set('America/Bahia');

require_once 'Conexao.php';
class Noticia{
    private $conexao;

    public function __construct(){
        $con = new Conexao();
        $this->conexao = $con->conectar();
    }

    public function cadastrarNoticia($titulo, $subtitulo, $conteudo, $autor, $status, $imagem = NULL, $fonte = NULL){
        try{
            if(!empty($imagem)){
                $imagem = $this->tratarImagem($imagem);
                if($imagem == false){
                    return false;
                }
            }
            $dataPublicacao = date('Y-m-d');
            
            $identificadorAutor = $autor->getIdentificador();
            $consulta = $this->conexao->prepare("INSERT INTO noticia (titulo, subtitulo, imagem, dataPublicacao, status, conteudo, fonte, id_autor) VALUE (:TITULO, :SUBTITULO, :IMAGEM, :DATAPUBLICACAO, :STATUS, :CONTEUDO, :FONTE, :IDAUTOR)");

            $consulta->bindParam(":TITULO", $titulo);
            $consulta->bindParam(":SUBTITULO", $subtitulo);
            $consulta->bindParam(":IMAGEM", $imagem);
            $consulta->bindParam(":DATAPUBLICACAO", $dataPublicacao);
            $consulta->bindParam(":STATUS", $status);
            $consulta->bindParam(":CONTEUDO", $conteudo);
            $consulta->bindParam(":FONTE", $fonte);
            $consulta->bindParam(":IDAUTOR", $identificadorAutor);
            
            $consulta->execute();
            
            return true;
        }catch(PDOException $e){

        }

        
        
        
    }
    public function buscarTodasNoticias(){
        try{
            $consulta = $this->conexao->prepare("SELECT * FROM noticia WHERE status=1");
            $consulta->execute();
            $noticias = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $noticias;
        }catch(PDOException $e){
            return false;
        }
    }
    public function buscarNoticiasPorAutor($idAutor){
        try{
            $consulta = $this->conexao->prepare("SELECT * FROM noticia WHERE id_autor=:IDAUTOR");
            $consulta->bindParam(":IDAUTOR", $idAutor);
            $consulta->execute();
            $noticias = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $noticias;
        }catch(PDOException $e){
            return false;
        }
    }
    public function buscarNoticiaPorIdentificador($identificador){
        try{
            $consulta = $this->conexao->prepare("SELECT * FROM noticia WHERE identificador=:IDENTIFICADOR");
            $consulta->bindParam(":IDENTIFICADOR", $identificador);
            $consulta->execute();
            $noticias = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $noticias;
        }catch(PDOException $e){
            return false;
        }
    }
    public function editarNoticia(){

    }
    public function deletarNoticia($identificador){
        try{
            $consultaDeletaImagem = $this->conexao->prepare("SELECT imagem FROM noticia WHERE identificador=:IDENTIFICADOR");
            $consultaDeletaImagem->bindParam(":IDENTIFICADOR", $identificador);
            $consultaDeletaImagem->execute();
            $resconsultaImagem = $consultaDeletaImagem->fetchAll(PDO::FETCH_ASSOC);
            $imagem  = $resconsultaImagem[0]['imagem'];
            if($imagem != NULL){
                unlink('../imagens/'.$imagem);
            }
    
            $deletaNoticia = $this->conexao->prepare("DELETE FROM noticia WHERE identificador=:IDENTIFICADOR");
            $deletaNoticia->bindParam(":IDENTIFICADOR", $identificador);
            $deletaNoticia->execute();
    
            return true;
        }
        catch(PDOException $e){
            return false;
        }
       




    }
    private function tratarImagem($imagem){
        
        if(exif_imagetype($imagem['tmp_name']) == IMAGETYPE_JPEG){
            $nome_imagem = md5(uniqid(time())).".jpg";
        }elseif(exif_imagetype($imagem['tmp_name'])== IMAGETYPE_PNG){
            $nome_imagem = md5(uniqid(time())).".png";
        }else{
            return false;
        }
        
        $caminho_imagem =  'imagens/'.$nome_imagem;

        move_uploaded_file($imagem['tmp_name'], $caminho_imagem);
        return $nome_imagem;

    }


    

}

?>