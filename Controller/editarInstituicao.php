<?php

require __DIR__ . '\../vendor/autoload.php';



use \App\Model\Instituicao;

define('TITLEINSTITUICAO', 'Editar Instituicao');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
   
    header('location:/www.escola.com.br/Controller/controllerInstituicao.php?status=error');
    exit;
}

$obinstituicao = Instituicao::getInstituicao($_GET['id']);
if (!$obinstituicao instanceof instituicao) {
    // echo($obinstituicao);
    echo "<script>alert('" . $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerInstituicao.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['datacriacao'], $_POST['tipo'])) {
    $obinstituicao->nome = $_POST['nome'];
    $obinstituicao->datacriacao = $_POST['datacriacao'];
    $obinstituicao->enade = $_POST['tipo'];
    

    //print_r($obinstituicao);
    $obinstituicao->atualizar();
    header('location: /www.escola.com.br/Controller/controllerInstituicao.php?status=success');
    exit;
}

include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioInstituicao.php';
include __DIR__ . '\../View/footer.php';
