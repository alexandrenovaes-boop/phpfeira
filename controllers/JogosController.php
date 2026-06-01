<?php
class JogosController{
    private $JogosModel;

    public function _construct($conexao){
        $this->JogosModel = new JogosModel ($conexao);
    }

    public function listar(){
        return $this->JogosModel->ListarJogos();

    }
    public function adicionar ($nome, $ano, $nota, $genero){
         return $this->JogosModel-> AdicionarJogos($nome, $ano, $nota, $genero);
    }

   public function editar ($id, $nome, $ano, $nota, $genero){
         return $this->JogosModel-> AtualizarJogos($id, $nome, $ano, $nota, $genero);
    }

    public function deletar($id){
        return $this->JogosModel->DeletarJogos($id);
  }

  public function buscar($id){
        return $this->JogosModel->BuscarJogos($id);
  }
}
?>
