<?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação nao executada!</div>';
            break;
    }
}

$resultados = '';
foreach ($curso as $curso) {
    $resultados .= '<tr>
                        <td>' . $curso->id . '</td>
                        <td>' . $curso->nome . '</td>
                        <td>' . $curso->datacriacao . '</td>
                        <td>' . $curso->enade . '</td>
                        <td>' . $curso->area . '</td>
                        
                        <td>
                        <a href="editarCurso.php?id=' . $curso->id . '"><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        
                        <a href="excluirCurso.php?id=' . $curso->id . '"><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                        </td>
                        
                        </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
    <td colspan="6" class="text-center">        Nenhum curso encontrado</td>
    </tr>';
?>

<main>
    <?= $mensagem ?>
   
    <section>
   
        <a href="cadastroCurso.php">
            <button class="btn btn-success"> Novo +</button>
        </a>
        <h2 class="mt-3 ml-6"><?=TITLELCURSO?></h2>
        <table class="table bg-white mt-3">
            <thead>
                <tr>
                    <th>ID Curso</th>
                    <th>Nome</th>
                    <th>Data de Criação</th>
                    <th>Enade</th>
                    <th>Area</th>
                    <th>Ações</th>
                   
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>

        </table>

    </section>

</main>