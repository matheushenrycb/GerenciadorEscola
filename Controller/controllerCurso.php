<?php


require __DIR__.'\../vendor/autoload.php';
use \App\Model\Curso;
$curso = Curso::getCursos();
define('TITLELCURSO', 'Lista de Cursos');
include __DIR__.'\../View/header.php';
include __DIR__.'\../View/listagemCurso.php';
include __DIR__.'\../View/footer.php';