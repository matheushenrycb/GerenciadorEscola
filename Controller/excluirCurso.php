<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Curso;

//validação do ID
if(!isset($_GET['id'])or !is_numeric($_GET['id'])){
    header('location:/www.escola.com.br/?status=error');
    exit;
}

// consultar curso
 $obcurso = Curso::getCurso($_GET['id']);
 //validar o curso
 if(!$obcurso instanceof Curso){
    header('location:/www.escola.com.br/?status=error');
    exit;
 }
 

//Validação do POST
if (isset($_POST['excluir'])) {
    $obcurso->excluir();
    header('location: /www.escola.com.br/Controller/controllerCurso.php?status=success');
    exit;
}
include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/confirmaExcluirCurso.php';
include __DIR__ . '\../View/footer.php';