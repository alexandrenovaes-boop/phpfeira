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
    public function adicionar ($nome, $ano, $nota, $genero){
         return $this->jogosModel-> adicionarJogos($nome, $ano, $nota, $genero);
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
