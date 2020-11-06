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
foreach ($instituicao as $instituicao) {
    $resultados .= '<tr>
                        <td>' . $instituicao->id . '</td>
                        <td>' . $instituicao->nome . '</td>
                        <td>' . $instituicao->datacriacao . '</td>
                        <td>' . $instituicao->tipo . '</td>
                       
                        
                        <td>
                        <a href="editarInstituicao.php?id=' . $instituicao->id . '"><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        
                        <a href="excluirInstituicao.php?id=' . $instituicao->id . '"><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                        </td>
                        
                        </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
    <td colspan="6" class="text-center">        Nenhum instituicao encontrado</td>
    </tr>';
?>

<main>
    <?= $mensagem ?>
   
    <section>
   
        <a href="cadastroinstituicao.php">
            <button class="btn btn-success"> Novo +</button>
        </a>
        <h2 class="mt-3 ml-6"><?=TITLELINSTITUICOES?></h2>
        <table class="table bg-white mt-3">
            <thead>
                <tr>
                    <th>ID instituicao</th>
                    <th>Nome</th>
                    <th>Data de Criação</th>
                    <th>Tipo</th>
                    <th>Ações</th>
                   
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>

        </table>

    </section>

</main>