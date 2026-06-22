<?php
include '../config/conexao.php';
include '../models/JogosModel.php';
class JogosController{
    private $jogosModel;

    public function __construct($conexao){
        $this->jogosModel = new JogosModel ($conexao);
    }

    public function listar(){
        return $this->jogosModel->listarJogos();

    }
    public function adicionar (){
         $nome = $_POST['nome'];
         $ano = $_POST ['ano'];
         $nota = $_POST ['nota'];
         $genero = $_POST ['genero'];
         return $this->jogosModel-> adicionarJogos($nome, $ano, $nota, $genero);
          header('Location: ../public/index.php?mensagem=Filme adicionado com sucesso!');
    } 
    else{
       header('Location: ../public/index.php?mensagem=Erro ao adicionar o jogo!');
    } 
    {
        }

   public function editar ($id, $nome, $ano, $nota, $genero){
         return $this->jogosModel-> atualizarJogos($id, $nome, $ano, $nota, $genero);

    }

    public function deletar($id){
        return $this->jogosModel->deletarJogos($id);
  }

  public function buscar($id){
        return $this->jogosModel->buscarJogos($id);
  }
}
?>
