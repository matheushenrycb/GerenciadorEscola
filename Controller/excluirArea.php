<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Area;

//validação do ID
if(!isset($_GET['id'])or !is_numeric($_GET['id'])){
    header('location:/www.escola.com.br/?status=error');
    exit;
}

// consultar area
 $obarea = area::getArea($_GET['id']);
 //validar o area
 if(!$obarea instanceof area){
    header('location:/www.escola.com.br/?status=error');
    exit;
 }
 

//Validação do POST
if (isset($_POST['excluir'])) {
    $obarea->excluir();
    header('location: /www.escola.com.br/Controller/controllerArea.php?status=success');
    exit;
}
include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/confirmaExcluirArea.php';
include __DIR__ . '\../View/footer.php';