<?php
include '../config/conexao.php';
include '../controllers/JogosControllers.php'

         $nome = $_POST['nome'];
         $ano = $_POST ['ano'];
         $nota = $_POST ['nota'];
         $genero = $_POST ['genero'];

$controller = new JogosController($conexao);
$controller -> adicionar($nome,$ano,$nota,$genero);