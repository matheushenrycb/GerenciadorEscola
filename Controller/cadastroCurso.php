<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Curso;
$obcurso = new Curso;
define('TITLECURSO', 'Cadastrar curso');

//Validação do POST
if (isset($_POST['nome'], $_POST['datacriacao'], $_POST['enade'], $_POST['area'])){

   
    $obcurso->nome= $_POST['nome'];
    $obcurso->datacriacao= $_POST['datacriacao'];
    $obcurso->enade= $_POST['enade'];
    $obcurso->area= $_POST['area'];
   
    $obcurso->cadastrar();
    header('location:/www.escola.com.br/Controller/controllerCurso.php?status=success');
    exit;
}



include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioCurso.php';
include __DIR__ . '\../View/footer.php';
