<?php

require __DIR__ . '\../vendor/autoload.php';



use \App\Model\Curso;

define('TITLECURSO', 'Editar Curso');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    // echo "<script>alert('". $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerCurso.php?status=error');
    exit;
}

$obcurso = Curso::getCurso($_GET['id']);
if (!$obcurso instanceof Curso) {
    // echo($obcurso);
    echo "<script>alert('" . $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerCurso.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['datacriacao'], $_POST['enade'], $_POST['area'])) {
    // echo "<script>alert('". $_GET['id'] . "');</script>";

    $obcurso->nome = $_POST['nome'];
    $obcurso->datacriacao = $_POST['datacriacao'];
    $obcurso->enade = $_POST['enade'];
    $obcurso->area = $_POST['area'];

    //print_r($obcurso);
    $obcurso->atualizar();
    header('location: /www.escola.com.br/Controller/controllerCurso.php?status=success');
    exit;
}

include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioCurso.php';
include __DIR__ . '\../View/footer.php';
