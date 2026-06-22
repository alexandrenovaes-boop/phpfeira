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
        $sql ="INSERT INTO jogos (nome, ano, nota, genero) VALUES (?,?,?,?)";

if ($stmt = $conn->prepare($sql)){
    
   $stmt->bind_param("sids", $nome, $ano, $nota, $genero);
   $stmt->execute();
    //echo"Cadastro realizado com sucesso!";
   header('Location:  ./index.php?sucesso=1');
}
  else{
    echo "ERRO: ".$sql. "<br>" .$conn->error; 
  }
  $stmt->close();
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