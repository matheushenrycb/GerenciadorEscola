<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Area;
$obarea = new Area;
define('TITLEAREA', 'Cadastrar Area');

//Validação do POST
if (isset($_POST['nome'])) {

   
    $obarea->nome= $_POST['nome'];
   
    $obarea->cadastrar();
    header('location:/www.escola.com.br/Controller/controllerArea.php?status=success');
    exit;
}



include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioArea.php';
include __DIR__ . '\../View/footer.php';
