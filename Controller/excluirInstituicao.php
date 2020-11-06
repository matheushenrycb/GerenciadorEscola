<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Instituicao;

//validação do ID
if(!isset($_GET['id'])or !is_numeric($_GET['id'])){
    header('location:/www.escola.com.br/?status=error');
    exit;
}

// consultar instituicao
 $obinstituicao = instituicao::getInstituicao($_GET['id']);
 //validar o instituicao
 if(!$obinstituicao instanceof instituicao){
    header('location:/www.escola.com.br/?status=error');
    exit;
 }
 

//Validação do POST
if (isset($_POST['excluir'])) {
    $obinstituicao->excluir();
    header('location: /www.escola.com.br/Controller/controllerInstituicao.php?status=success');
    exit;
}
include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/confirmaExcluirInstituicao.php';
include __DIR__ . '\../View/footer.php';