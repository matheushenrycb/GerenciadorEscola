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

$resultadosp = '';
foreach ($professor as $professor) {
    $resultadosp .= '<tr>
                        <td>' . $professor->id . '</td>
                        <td>' . $professor->nome . '</td>
                        <td>' . $professor->cpf . '</td>
                        <td>' . $professor->sala . '</td>
                        <td>' . $professor->turma . '</td>
                        <td>' . $professor->materia . '</td>
                        <td>
                        <a href="editarp.php?id=' . $professor->id . '"><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        
                        <a href="excluirp.php?id=' . $professor->id . '"><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                        </td>
                        
                        </tr>';
}

$resultadosp = strlen($resultadosp) ? $resultadosp : '<tr>
    <td colspan="6" class="text-center">        Nenhum professor encontrado</td>
    </tr>';
?>

<main>
    <?=$mensagem ?>
    <section>
        <a href="cadastrop.php">
            <button class="btn btn-success"> Novo +</button>
        </a>

    </section>
    <section>
    <h2 class="mt-3 ml-6"><?=TITLELP?></h2>
        <table class="table bg-white mt-3">
            <thead>
                <tr>
                    <th>RA Prof</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Sala</th>
                    <th>Turma</th>
                    <th>Materia</th>
                    <th>Ações</th>
                    
                </tr>
            </thead>
                <tbody>
                <?=$resultadosp?>
                </tbody>

        </table>

    </section>

</main>