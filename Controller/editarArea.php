<?php

require __DIR__ . '\../vendor/autoload.php';



use \App\Model\Area;

define('TITLEAREA', 'Editar Area');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    // echo "<script>alert('". $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerArea.php?status=error');
    exit;
}

$obarea = area::getArea($_GET['id']);
if (!$obarea instanceof area) {
    // echo($obarea);
    echo "<script>alert('" . $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerArea.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'])) {
    

    $obarea->nome = $_POST['nome'];
   

   // chama metodo atualizar de area
    $obarea->atualizar();
    header('location: /www.escola.com.br/Controller/controllerArea.php?status=success');
    exit;
}

include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioArea.php';
include __DIR__ . '\../View/footer.php';
