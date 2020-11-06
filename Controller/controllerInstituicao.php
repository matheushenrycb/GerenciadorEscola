<?php
require __DIR__.'\../vendor/autoload.php';


use \App\Model\Instituicao;
$instituicao = Instituicao::getInstituicoes();
//print_r($instituicaos);
define('TITLELINSTITUICOES', 'Lista de Instituições');

include __DIR__.'\../View/header.php';
include __DIR__.'\../View/listagemInstituicao.php';
include __DIR__.'\../View/footer.php';