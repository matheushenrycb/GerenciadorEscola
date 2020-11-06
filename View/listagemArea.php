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
foreach ($area as $area) {
    $resultados .= '<tr>
                        <td>' . $area->id . '</td>
                        <td>' . $area->nome . '</td>
                        
                        
                        <td>
                        <a href="editarArea.php?id=' . $area->id . '"><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        
                        <a href="excluirArea.php?id=' . $area->id . '"><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                        </td>
                        
                        </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
    <td colspan="6" class="text-center">        Nenhum area encontrado</td>
    </tr>';
?>

<main>
    <?= $mensagem ?>
   
    <section>
   
        <a href="cadastroarea.php">
            <button class="btn btn-success"> Novo +</button>
        </a>
        <h2 class="mt-3 ml-6"><?=TITLELAREA?></h2>
        <table class="table bg-white mt-3">
            <thead>
                <tr>
                    <th>ID area</th>
                    <th>Nome</th>
                    <th>Ações</th>
                    
                </tr>
            </thead>
            <tbody>
                <?= $resultados ?>
            </tbody>

        </table>

    </section>

</main>