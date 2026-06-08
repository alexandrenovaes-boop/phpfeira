<?php
include '../config/conexao.php';
include '../controllers/JogosController.php';
//include '../views/layouts/hearder.php'

$controller = new JogosController($conexao);

// Roteamento Básico
if (isset($_GET['action'])){
    $action = $_GET['action'];
    $id = $_GET['id'] ?? null;

    switch ($action){
        case 'adicionar':
            include '../views/jogos/adicionar.php';
            break;

        case 'editar':
            if($id){
            $jogos = $controller->Buscar($id);
            include '../views/jogos/editar.php';
            }
            break;
        case 'deletar':
            if($id){
            $controller->Deletar($id);
            header("Location: /public/index.php?mensagem=Jogo Deletado com sucesso! ");
            exit();
            }    
            break;
        
     default:
          $jogos = $controller->Listar();
          include '../views/jogos/index.php';
          break;

    }
 }else{
    $jogos = $controller->Listar();
    include '../views/jogos/index.php';

}   
include '../views/layouts/footer.php';
