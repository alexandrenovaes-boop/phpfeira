<?php
class JogosModel {
    private $conexao;

    public function __construct($conexao) {
         $this->conexao = $conexao;
    }

    public function listarJogos(){
        $sql = "SELECT * FROM jogos";
        return $result =  $this->conexao->query($sql);
        
        //Código de listar
    }

    public function buscarJogos(){
        $sql = "SELECT * FROM jogos where id = $id";
        $result = $this->conexao->query($sql);

        if($result ->num_rows > 0){
            return $result->fetch_assoc();
        }
        //Código de Buscar
    }
     public function adicionarJogos(){
        //Código de Adicionar
    }
     public function atualizarJogos(){
        //Código de Atualizar
    }
     public function deletarJogos(){
        //Código de Deletar
    }
}
  
?>