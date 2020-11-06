<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Instituicao;
$obinstituicao = new Instituicao;
define('TITLEINSTITUICAO', 'Cadastrar Instituição');

//Validação do POST
if (isset($_POST['nome'], $_POST['datacriacao'], $_POST['tipo'])){

   
    $obinstituicao->nome= $_POST['nome'];
    $obinstituicao->datacriacao= $_POST['datacriacao'];
    $obinstituicao->tipo= $_POST['tipo'];
    
   
    $obinstituicao->cadastrar();
    header('location:/www.escola.com.br/Controller/controllerInstituicao.php?status=success');
    exit;
}



include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioInstituicao.php';
include __DIR__ . '\../View/footer.php';
