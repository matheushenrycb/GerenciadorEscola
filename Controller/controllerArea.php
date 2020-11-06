<?php


require __DIR__.'\../vendor/autoload.php';
use \App\Model\Area;
$area = Area::getAreas();
define('TITLELAREA', 'Lista de Areas');
include __DIR__.'\../View/header.php';
include __DIR__.'\../View/listagemArea.php';
include __DIR__.'\../View/footer.php';